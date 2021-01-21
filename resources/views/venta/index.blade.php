@extends('layouts.app')
@section('slider')
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">VENTA</h2>
            <a href="{{route('venta.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Venta </button></a>
              <a href="{{route('venta.exportar')}}" class="btn btn-danger">PDF</a>
          </div>
        </div>

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>
          <th class="wd-7p">PACIENTE</th>
          <th class="wd-7p">TOTAL</th>
          <th class="wd-7p">TIPO</th>
          <th class="wd-7p">SALDO</th>
          <th class="wd-7p">FECHA</th>
          <th class="wd-7p">ESTADO</th>
          <th class="wd-7p">ACCION</th>
        </tr>
      </thead>
      <tbody>
      @foreach($venta as $vent)
        <tr>
          <th scope="row">{{$vent ->id}}</th>
          <td>{{$vent->paciente->persona->nombre}}</td>
          <td>{{$vent->total}}</td>
          <td>{{$vent->tipoventa->nombre}}</td>
          <td>{{$vent->saldo}}</td>
          <td>{{$vent->created_at}}</td>
          <td>{{$vent->estado}}</td>
          <td>
            <a href="{{route('venta.edit', $vent->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('venta.show', $vent->id)}}" class="btn btn-primary" >Ver</a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div><!-- table-responsive -->


</div>



@endsection
