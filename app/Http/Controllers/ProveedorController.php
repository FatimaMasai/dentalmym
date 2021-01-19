<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Persona;
use App\Http\Requests\Proveedor\StoreRequest;
use App\Http\Requests\Proveedor\UpdateRequest;
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor= Proveedor::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('proveedor.index')->with('proveedor', $proveedor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = Persona::where('estado',1)->orderBy('id','Desc')->get();
        return view('proveedor.create')->with('persona', $persona);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $proveedor = new Proveedor($request->all());
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.show')->with('proveedor', $proveedor); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        $persona = Persona::where('estado',1)->orderby('id', 'Desc')->get();
        return view('proveedor.edit')->with('proveedor', $proveedor)->with('persona', $persona);
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
    //     $proveedor = Proveedor::find($id);
    //     $proveedor=$proveedor->fill($request->all());
    //     $proveedor->save();
    //     return redirect()->route('proveedor.index');
    // }
    public function update(UpdateRequest $request, Proveedor $proveedor)
    {
        // dd($request, 'Validacion pasada con exito');
        $proveedor->my_update($request);
        Alert('Éxito', 'El proveedor se ha actualizado', 'success')->showConfirmButton();
        return redirect()->route('proveedor.index');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->update(['estado'=>0]);
        return redirect()->route('proveedor.index');
    }
}
