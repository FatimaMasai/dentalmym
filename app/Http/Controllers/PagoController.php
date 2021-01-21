<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pago= Pago::where('estado',1)->orderBy('id', 'Desc')->paginate(10);
         return view('pago.index')->with('pago', $pago);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = Venta::where('estado',1)->orderBy('id','Desc')->get();
        $pagos = Pago::where('estado',-1)->orderBy('created_at','ASC')->get();
        return view('pago.create', compact('ventas', 'pagos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = new pago($request->all());
        $pago->save();
        $venta = Venta::find($pago->id_venta);
        $venta->saldo = $pago->saldo;
        $venta->save();
        return redirect()->route('venta.show', $pago->id_venta);
    }

    public function detalle_pagos(Request $request, $id_venta){
        $pagos = Pago::where('estado', 1)->where('id_venta', $id_venta)->orderBy('created_at','ASC')->get();
        if ($request->ajax()){
            return view('pago.aside.detallepagos', compact('pagos'))->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
