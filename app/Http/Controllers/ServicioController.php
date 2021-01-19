<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\TipoServicio;
use PDF;
use Carbon\Carbon; 
use App\Exports\ServicioExport; 
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ServicioImport; 
use App\Http\Requests\Servicio\StoreRequest;
use App\Http\Requests\Servicio\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;

 
class ServicioController extends Controller
{
    public function import_excel(Request $request)
    {
        $file=$request->file('file');
        Excel::import(new ServicioImport, $file);
        return back()->with('message', 'Importacion de usuario completada');
    }
    public function exportar_excel()
    {
        return Excel::download(new ServicioExport, 'listado_servicio.xlsx');
    }
    public function grafico()
    {
        $servicio = Servicio::where('estado',1)->get();
        return view('servicio/graficos')->with('servicio', $servicio);
    } 

    public function exportar()
    {
        $servicio = Servicio::all();
        $fecha_actual = Carbon::now();
        view()->share('servicio', $servicio);
        view()->share('fecha_actual', $fecha_actual);
        $pdf = PDF::loadView('servicio.exportar', [$servicio, $fecha_actual]);
        return $pdf->download('lista_servicios.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function index()
    {
        $servicio = Servicio::all();
        // $servicio= Servicio::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('servicio.index')->with('servicio', $servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposervicio = TipoServicio::where('estado',1)->orderBy('id','Desc')->get();
        return view('servicio.create')->with('tiposervicio', $tiposervicio);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $servicio = new Servicio($request->all());
        $servicio->save();
        Alert('Éxito', 'El Nuevo Servicio se ha guardado', 'success')->showConfirmButton();
        return redirect()->route('servicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('servicio.show')->with('servicio', $servicio); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        $tiposervicio = TipoServicio::where('estado',1)->orderby('id', 'Desc')->get();
        return view('servicio.edit')->with('servicio', $servicio)->with('tiposervicio', $tiposervicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $servicio = Servicio::find($id);
    //     $servicio=$servicio->fill($request->all());
    //     $servicio->save();
    //     return redirect()->route('servicio.index');
    // }

    public function update(UpdateRequest $request, Servicio $servicio)
    {
        // dd($request, 'Validacion pasada con exito');
        $servicio->my_update($request);
        Alert('Éxito', 'El Servicio se ha actualizado', 'success')->showConfirmButton();
        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->update(['estado'=>0]);
        return redirect()->route('servicio.index');
    }
 
}
