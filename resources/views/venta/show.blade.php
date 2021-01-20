@extends('layouts.app')
@section('slider')     

        <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">PACIENTE: </h6> 

          <input type="text" name="id_paciente"  id="id_paciente" value="{{$venta->paciente->persona->nombre}} {{$venta->paciente->persona->apellido_pat}}" class="form-control" readonly >
          <p class="mg-b-25 mg-lg-b-50">Fecha Emsión: {{$venta->created_at}} </p>

          <div class="table-responsive ">
            <table class="table table table-bordered ">
              <thead class="thead-colored thead-primary">
                <tr>
                  <th>ITEM</th>
                  <th>SERVICIO</th>
                  <th>CANTIDAD</th>
                  <th>PRECIO</th>
                  <th>SUBTOTAL</th>
                </tr>
              </thead>
              <tbody> 
                @php($item=1)
                @foreach($detalle as $detall)  
                <tr>
                <th scope="row"> {{$item}} </th>   
                <td> {{$detall->servicio->nombre}} </td> 
                <td> {{$detall->cantidad}} </td> 
                <td> {{$detall->servicio->precio}}</td> 
                <td> {{$detall->cantidad * $detall->servicio->precio}} Bs.  </td>  
                </tr>    
                @php($item++)
                @endforeach 
                
              </tbody>
              
            </table>
          </div><!-- bd -->
          <div class="row">
              <div class="col-md-12">
                  <div class="col-md-7"></div>
                  <div class="col-md-5">
                  <label for=""><b>TOTAL A PAGAR: {{$total_pagar}}</b></label>
                  </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-1">
                    <a href="{{route('venta.index')}}"><button class="btn btn-primary">Volver</button></a>

                </div>
                <div class="col-md-1">
                    <a href="{{route('venta.edit',$venta->id)}}"><button class="btn btn-primary">Editar</button></a>
                </div> 
                <div class="col-md-1">
                    <a target="_blank" href="{{route('venta.reporte_venta_id', $venta->id)}}"><button class="btn btn-danger">PDF</button></a>
                </div> 
               
            </div> 
     
        </div><!-- br-section-wrapper -->
      </div> 
@endsection