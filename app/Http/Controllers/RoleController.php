<?php

namespace App\Http\Controllers;

use App\Models\Role;

use Illuminate\Http\Request;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return 'hola desde controlador index';
        //PENDIENTE AÑADIR AUTORIZACION CON LOS POLICES
        $role = Role::orderBy('id', 'DESC')->paginate();
        return view('role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
         //PENDIENTE AÑADIR AUTORIZACION CON LOS POLICES
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Role $role)
    {
        $role = $role->store($request);
        // return 'el rol se guardo';
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('role.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit')->with('role', $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Role $role)
    {
        // dd($request, 'Validacion pasada con exito');
        $role->my_update($request);
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //PENDIENTE AÑADIR AUTORIZACION CON LOS POLICES
        $role->delete();
        Alert('Éxito', 'El rol eliminado', 'success')->showConfirmButton();
        dd($role);
        return redirect()->route('role.index');
    }
}
