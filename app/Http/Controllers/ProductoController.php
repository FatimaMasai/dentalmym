<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoProducto;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto= producto::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('producto.index')->with('producto', $producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoproducto = TipoProducto::where('estado',1)->orderBy('id','Desc')->get();
        return view('producto.create')->with('tipoproducto', $tipoproducto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $producto = new Producto($request->all());
        $producto->save();
        Alert('Éxito', 'El Nuevo Producto se ha guardado', 'success')->showConfirmButton();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto.show')->with('producto', $producto); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipoproducto = TipoProducto::where('estado',1)->orderby('id', 'Desc')->get();
        return view('producto.edit')->with('producto', $producto)->with('tipoproducto', $tipoproducto);
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
    //     $producto = Producto::find($id);
    //     $producto=$producto->fill($request->all());
    //     $producto->save();
    //     return redirect()->route('producto.index');
    // }

    public function update(UpdateRequest $request, Producto $producto)
    {
        // dd($request, 'Validacion pasada con exito');
        $producto->my_update($request);
        Alert('Éxito', 'El Producto se ha actualizado', 'success')->showConfirmButton();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->update(['estado'=>0]);
        return redirect()->route('producto.index');
    }
}
