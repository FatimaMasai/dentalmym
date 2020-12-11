<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Paciente; 
use PDF;
use Carbon\Carbon;

class VentaController extends Controller
{
    public function exportar()
    {
        $venta = venta::all();
        $fecha_actual = Carbon::now();
        view()->share('venta', $venta);
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
        return view('venta.create')->with('paciente', $paciente);
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
        $venta->save();
        return redirect()->route('venta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = venta::find($id);
        return view('venta.show')->with('venta', $venta); 
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
        
        $paciente = Paciente::where('estado',1)->orderby('id', 'Desc')->get(); 
        return view('venta.edit')->with('venta', $venta)->with('paciente', $paciente);
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
