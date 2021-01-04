@extends('layouts.app')
@section('slider')  
<div class="row row-sm mg-t-20">
  <div class="col-12">
    <div class="card pd-0 bd-0 shadow-base">
      <div class="pd-x-30 pd-t-30 pd-b-15">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h2 class="tx-24 tx-uppercase tx-inverse tx-semibold tx-spacing-1">LISTADO PRODUCTO</h2> 
            <a href="{{route('producto.create')}}">
            <button class="btn btn-info"> <i class="menu-item-icon icon ion-android-add"></i> Agregar PRODUCTO </button></a>
               
          </div> 
        </div> 

  <div class="table-responsive pt-4">
    <table class="table table-bordered">
      <thead class="thead-colored thead-primary">
        <tr>
          <th class="wd-5p">ID</th>  
          <th class="wd-7p">PRODUCTO</th>
          <th class="wd-7p">PRECIO</th>
          <th class="wd-7p">TIPO PRODUCTO</th> 
          <th class="wd-7p">ACCION</th> 
        </tr>
      </thead>
      <tbody>
      @foreach($producto as $produc)
        <tr>
          <th scope="row">{{$produc ->id}}</th>
          <td>{{$produc->nombre}} </td>
          <td>{{$produc->precio}} BS </td> 
          <td>{{$produc->tipoproducto->nombre}}  </td>

          <td>  
            <a href="{{route('producto.edit', $produc->id)}}" class="btn btn-success" >Editar</a>
            <a href="{{route('producto.show', $produc->id)}}" class="btn btn-primary" >Ver</a> 
                                             
          </td>
        </tr>  
        @endforeach
      </tbody>
    </table>
  </div><!-- table-responsive -->
</div> 
          
 
         
@endsection