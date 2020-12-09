@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO PACIENTE</h2> 
            <a href="{{route('paciente.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Paciente </button></a>
              
          </div> 
        </div> 

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>  
          <th class="wd-7p">PACIENTE</th>
          <th class="wd-7p">OBSERVACION</th>
          <th class="wd-7p">ALERGIA</th>
          <th class="wd-7p">RECOMENDADO</th>
          <th class="wd-7p">ANTECEDENTES</th>
          <th class="wd-7p">ACCION</th> 
        </tr>
      </thead>
      <tbody>
      @foreach($paciente as $pacient)
        <tr>
          <th scope="row">{{$pacient ->id}}</th>
          <td>{{$pacient->persona->nombre}} {{$pacient->persona->apellido_pat}} {{$pacient->persona->apellido_mat}} </td>
          <td>{{$pacient->observacion}} </td>
          <td>{{$pacient->alergia}} </td>
          <td>{{$pacient->recomendado}} </td> 
          <td>{{$pacient->antecedentes}}   </td> 
          <td>  
            <a href="{{route('paciente.edit', $pacient->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('paciente.show', $pacient->id)}}" class="btn btn-primary" >Ver</a>
                                             
          </td>
        </tr>  
        @endforeach
      </tbody>
    </table>
  </div><!-- table-responsive -->
</div> 
          
 
         
@endsection