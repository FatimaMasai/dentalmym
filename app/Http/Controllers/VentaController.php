<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Detalle;
use App\Models\Pago;
use App\Models\TipoVenta;
use PDF;
use Carbon\Carbon;
use Luecano\NumeroALetras\NumeroALetras;
class VentaController extends Controller
{


    public function delete($id,$venta_id)
    {
        $detalle=Detalle::findOrFail($id);
        $detalle->delete();
        return redirect()->route('venta.edit');
    }

    public function reporte_venta_id($id)
    {

        $venta = Venta::find($id);
        $detalle = Detalle::where('id_venta',$id)->get();
        $total_pagar=0;
        foreach($detalle as $detall)
        {
            $total_pagar += $detall->cantidad * $detall->servicio->precio;
        }
        $PDF = PDF::loadView('venta/exportar_venta_id',compact('venta', 'detalle', 'total_pagar'));
        return $PDF->stream('reporte.pdf');

    }



    public function exportar()
    {
        $venta = venta::all();
        $detalle = Detalle::all();
        $fecha_actual = Carbon::now();
        view()->share('venta', $venta);
        view()->share('detalle', $detalle);
        view()->share('fecha_actual', $fecha_actual);
        $pdf = PDF::loadView('venta.exportar', [$venta, $fecha_actual]);
        return $pdf->download('lista_ventas.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venta= venta::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
         return view('venta.index')->with('venta', $venta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = Paciente::where('estado',1)->orderBy('id','Desc')->get();
        $servicios = Servicio::where('estado', 1)->orderBy('nombre','ASC')->get();
        $tipoventas = TipoVenta::where('estado', 1)->orderBy('nombre','ASC')->get();
        $total = 0;
        return view('venta.create', compact('paciente', 'servicios', 'tipoventas', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta = new venta($request->all());

        //dd($request->subtotal);
        $detalles = $request->id_servicio;
        $venta->save();
        foreach ($detalles as $key => $value) {
            $detalle = new Detalle([
                'id_venta' => $venta->id,
                'id_servicio' => $request->id_servicio[$key],
                'cantidad' => $request->cantidad[$key],
                'subtotal' => $request->subtotal[$key],
            ]);
            $detalle->save();
        }

        $pago = new Pago($request->all());
        $pago->id_venta = $venta->id;
        $pago->saldoanterior = $venta->total;


        $pago->save();



        return redirect()->route('venta.show', $venta->id);
    }

    public function agregar_servicio(Request $request, $servicio_id, $cantidad, $total){
        $servicio = Servicio::find($servicio_id);
        $subtotal = $servicio->precio * $cantidad;
        $total = $total + $subtotal;
        return view('venta.aside.detalleserviciofila', compact('servicio', 'cantidad', 'subtotal', 'total'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Venta::find($id);
        $detalle = Detalle::where('id_venta', $id)->get();
        $total_pagar = 0;
        foreach($detalle as $detall)
        {
            $total_pagar += $detall->cantidad * $detall->servicio->precio;
        }
        return view('venta.show')
        ->with('venta', $venta)
        ->with('detalle', $detalle)
        ->with('total_pagar', $total_pagar);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = venta::find($id);

        $servicio = Servicio::where('estado',1)->orderby('id', 'Desc')->get();
        $nombre_paciente = $venta->paciente->persona->nombre.' '.$venta->paciente->persona->apellido_pat;
        $detalle = Detalle::where('id_venta', $id)->get();
        $total_pagar = 0;
        foreach($detalle as $detall)
        {
            $total_pagar += $detall->cantidad * $detall->servicio->precio;
        }
        return view('venta.edit')->with('venta', $venta)
        ->with('servicio', $servicio)
        ->with('nombre_paciente', $nombre_paciente)
        ->with('detalle', $detalle)
        ->with('total_pagar', $total_pagar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venta = venta::find($id);
        $venta=$venta->fill($request->all());
        $venta->save();
        return redirect()->route('venta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = venta::find($id);
        $venta->update(['estado'=>0]);
        return redirect()->route('venta.index');
    }

}
