@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO ROLES</h2> 
            <a href="{{route('role.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Rol</button></a>
            <br>
          </div> 
        </div>  
        <form action="{{route('role.index')}}" method="GET">          
          <div class="row">
            <div class="col-md-3">
              <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Buscar">
            </div>
            <div class="col-md-2"> 
              <span class="input-group-btn">
              <input type="submit" value="Buscar" class="btn btn-warning btn-block">
              </span>
            </div>
          </div> 
        </form>


      <div class="table-responsive pt-4">
        <table class="table table-bordered">
          <thead class="thead-colored thead-primary">
            <tr>
              <th class="wd-5p">ID</th>
              <th class="wd-7p">ROL</th> 
              <th class="wd-7p">SLUG</th> 
              <th class="wd-7p">DESCRIPCION</th>  
              <th class="wd-7p">CREADO</th> 
              <th class="wd-7p">ACCION</th> 
            </tr>
          </thead> 
          <tbody>
         
          @foreach ($role as $rol)
            <tr>
              <th scope="row">{{$rol->id}}</th> 
              <td> {{$rol->nombre}} </td> 
              <td> {{$rol->slug}} </td> 
              <td> {{$rol->descripcion}} </td> 
              <td> {{$rol->created_at}} </td> 
              <td>  
                <a href="{{route('role.edit', $rol->id)}}" class="btn btn-success" >Editar</a>
                <a href="{{route('role.show', $rol->id)}}" class="btn btn-primary" >Ver</a>
               @endforeach 
          </tbody>
        </table> 
      </div><!-- table-responsive -->
</div> 
 
         
@endsection