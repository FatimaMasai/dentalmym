<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\Persona\StoreRequest;
use App\Http\Requests\Persona\UpdateRequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $persona = Persona::where('nombre', 'LIKE', '%'.$request->nombre.'%')
        ->where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('persona.index')->with('persona',$persona);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $persona= new persona($request->all());
        $persona->save();
        Alert('Éxito', 'La Persona se ha guardado', 'success')->showConfirmButton();
        return redirect()->route('persona.index');

    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return view('persona.show')->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = persona::find($id);
        return view('persona.edit')->with('persona', $persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    // public function update(UpdateRequest $request, $id)
    // {
    //     $persona = Persona::find($id); 
    //     $persona = $persona->fill($request->all());
    //     $persona->save();
    //     return redirect()->route('persona.index');

    // }
    public function update(UpdateRequest $request, Persona $persona)
    {
        // dd($request, 'Validacion pasada con exito');
        $persona->my_update($request);
        Alert('Éxito', 'La Persona se ha actualizado', 'success')->showConfirmButton();
        return redirect()->route('persona.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = persona::find($id);
        $persona->update(['estado'=>0]);
        Alert('Éxito', 'Registro eliminado', 'success')->showConfirmButton();
        return redirect()->route('persona.index');
    }
}
