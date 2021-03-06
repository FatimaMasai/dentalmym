@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO Doctor</h2> 
            <a href="{{route('doctor.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Doctor </button></a>
              
          </div> 
        </div> 

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>  
          <th class="wd-7p">DOCTOR</th>
          <th class="wd-7p">ESPECIALIDAD</th> 
          <th class="wd-7p">ACCION</th> 
        </tr>
      </thead>
      <tbody>
      @foreach($doctor as $docto)
        <tr>
          <th scope="row">{{$docto ->id}}</th>
          <td>{{$docto->persona->nombre}}  </td>
          <td>{{$docto->especialidad}} </td> 
          <td>  
            <a href="{{route('doctor.edit', $docto->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('doctor.show', $docto->id)}}" class="btn btn-primary" >Ver</a>
                                             
          </td>
        </tr>  
        @endforeach
      </tbody>
    </table>
  </div><!-- table-responsive -->
</div> 
          
 
         
@endsection