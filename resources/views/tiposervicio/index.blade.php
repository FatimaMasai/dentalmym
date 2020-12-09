@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO TIPO SERVICIO</h2> 
            <a href="{{route('tiposervicio.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Tipo Servicio</button></a>
              
          </div> 
        </div> 

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>
          <th class="wd-7p">NOMBRE</th> 
          <th class="wd-7p">ACCION</th> 
        </tr>
      </thead> 
      <tbody>
      @foreach ($tiposervicio as $tiposervici)
        <tr>
          <th scope="row">{{$tiposervici->id}}</th> 
          <td> {{$tiposervici->nombre}} </td> 
          <td> 
            <a href="{{route('tiposervicio.edit', $tiposervici->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('tiposervicio.show', $tiposervici->id)}}" class="btn btn-primary" >Ver</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_delete-{{$tiposervici->id}}">
                Eliminar
            </button>                                
          </td>
        </tr>  
        @include('tiposervicio.delete')
        @endforeach
      </tbody>
    </table> 
  </div><!-- table-responsive -->
</div> 
          
 
         
@endsection