@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO PERSONA</h2> 
            <a href="{{route('persona.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Persona</button></a>
            <br>
          </div> 
        </div>  
        <form action="{{route('persona.index')}}" method="GET">          
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
              <th class="wd-7p">NOMBRE</th>
              <th class="wd-7p">APELLIDOS</th>
              <th class="wd-7p">CI</th>
              <th class="wd-7p">CELULAR</th>
              <th class="wd-7p">DIRECCION</th>
              <th class="wd-7p">ACCION</th> 
            </tr>
          </thead> 
          <tbody>
            @if(count($persona)<=0)
            <tr>
              <td colspan="8"> No hay resultados</td>
            </tr>
          @else
          @foreach ($persona as $person)
            <tr>
              <th scope="row">{{$person->id}}</th> 
              <td> {{$person->nombre}} </td>
              <td> {{$person->apellido_pat.' '.$person->apellido_mat}}</td>
              <td> {{$person->numero_doc}} </td>
              <td> {{$person->celular}} </td>
              <td> {{$person->direccion}} </td>
              <td> 
                <a href="{{route('persona.edit', $person->id)}}" class="btn btn-success" >Editar</a>
                <a href="{{route('persona.show', $person->id)}}" class="btn btn-primary" >Ver</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_delete-{{$person->id}}">
                    Eliminar
                </button>                                
              </td>
            </tr> 
            @include('persona.delete')
            @endforeach
            @endif
          </tbody>
        </table> 
      </div><!-- table-responsive -->
</div> 

          
 
         
@endsection