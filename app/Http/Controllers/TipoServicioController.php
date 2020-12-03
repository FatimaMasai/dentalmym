<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\TipoServicio;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposervicio = TipoServicio::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('tiposervicio.index')->with('tiposervicio',$tiposervicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiposervicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiposervicio= new TipoServicio($request->all());
        $tiposervicio->save();
        return redirect()->route('tiposervicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposervicio= TipoServicio::find($id);
        return view('tiposervicio.show')->with('tiposervicio', $tiposervicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposervicio = TipoServicio::find($id);
        return view('tiposervicio.edit')->with('tiposervicio', $tiposervicio);
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
        $tiposervicio = TipoServicio::find($id); 
        $tiposervicio = $tiposervicio->fill($request->all());
        $tiposervicio->save();
        return redirect()->route('tiposervicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiposervicio = TipoServicio::find($id);
        $tiposervicio->update(['estado'=>0]);
        return redirect()->route('tiposervicio.index');
    }
}
