<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;
class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoproducto = TipoProducto::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('tipoproducto.index')->with('tipoproducto',$tipoproducto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoproducto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoproducto= new TipoProducto($request->all());
        $tipoproducto->save();
        return redirect()->route('tipoproducto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoproducto= TipoProducto::find($id);
        return view('tipoproducto.show')->with('tipoproducto', $tipoproducto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoproducto = TipoProducto::find($id);
        return view('tipoproducto.edit')->with('tipoproducto', $tipoproducto);
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
        $tipoproducto = TipoProducto::find($id); 
        $tipoproducto = $tipoproducto->fill($request->all());
        $tipoproducto->save();
        return redirect()->route('tipoproducto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoproducto = TipoProducto::find($id);
        $tipoproducto->update(['estado'=>0]);
        return redirect()->route('tipoproducto.index');
    }
}
