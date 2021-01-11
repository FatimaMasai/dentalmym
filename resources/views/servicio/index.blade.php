@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO SERVICIO</h2> 
            <a href="{{route('servicio.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar Servicio </button></a>
              <a href="{{route('servicio.exportar')}}" class="btn btn-danger">PDF</a>
              <a href="{{route('servicio.exportar_excel')}}" class="btn btn-info">EXCEL</a>
          </div> 
          <form action="{{route('servicio.import_excel')}}" method="get" enctype="multipart/form-data">
            @csrf 
            @if(Session::has('message'))
              <p>{{Session::get('message')}}</p>
            @endif
            <input type="file" name="file">
            <button class="btn btn-success">Importar Servicios</button>
          </form>
        </div> 

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>  
          <th class="wd-7p">SERVICIO</th>
          <th class="wd-7p">PRECIO</th>
          <th class="wd-7p">TIPO SERVICIO</th> 
          <th class="wd-7p">ACCION</th> 
        </tr>
      </thead>
      <tbody>
      @foreach($servicio as $serv)
        <tr>
          <th scope="row">{{$serv ->id}}</th>
          <td>{{$serv->nombre}} </td>
          <td>{{$serv->precio}} BS </td> 
          <td>{{$serv->tiposervicio->nombre}}  </td>

          <td>  
            <a href="{{route('servicio.edit', $serv->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('servicio.show', $serv->id)}}" class="btn btn-primary" >Ver</a> 
                                             
          </td>
        </tr>  
        @endforeach
      </tbody>
    </table>
  </div><!-- table-responsive -->
</div> 
          
 
         
@endsection