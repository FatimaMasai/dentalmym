<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Persona;
use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor= Doctor::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
        return view('doctor.index')->with('doctor', $doctor); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = Persona::where('estado',1)->orderBy('id','Desc')->get();
        return view('doctor.create')->with('persona', $persona);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $doctor = new Doctor($request->all());
        $doctor->save();
        Alert('Éxito', 'El Doctor se ha guardado', 'success')->showConfirmButton();
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.show')->with('doctor', $doctor); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $persona = Persona::where('estado',1)->orderby('id', 'Desc')->get();
        return view('doctor.edit')->with('doctor', $doctor)->with('persona', $persona);
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
    //     $doctor = Doctor::find($id);
    //     $doctor=$doctor->fill($request->all());
    //     $doctor->save();
    //     return redirect()->route('doctor.index');
    // }
    public function update(UpdateRequest $request, Doctor $doctor)
    {
        // dd($request, 'Validacion pasada con exito');
        $doctor->my_update($request);
        Alert('Éxito', 'El Doctor se ha actualizado', 'success')->showConfirmButton();
        return redirect()->route('doctor.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->update(['estado'=>0]);
        return redirect()->route('doctor.index');
    }
}
