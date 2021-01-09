@extends('layouts.app')
@section('slider')  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Registro de Venta</h6> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group"> 
                        <input type="text" name="id_paciente"  id="id_paciente" value="{{$nombre_paciente}}" class="form-control" readonly >   
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="x_card_code" class="control-label mb-1"> <b>{{$venta->created_at}} </b> <span class="tx-danger"></span></label> 
                    </div>
                </div>
            </div>   
            <form action="{{route('detalle.store')}}" method="post">
                @csrf
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Agregar Servicio</h6>
                <div class="form-layout">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="x_card_code" class="control-label mb-1"> SERVICIO<span class="tx-danger"></span></label>
                                <input type="hidden" name="id_venta" value="{{$venta->id}}" >    
                                    <select name="id_servicio" id="id_servicio" class="form-control">
                                        <option value="">Seleccionar</option>
                                        @foreach($servicio as $serv)
                                        <option value="{{$serv->id}}">{{$serv->nombre}}  {{$serv->precio}}</option>  
                                        @endforeach
                                    </select>

                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="x_card_code" class="control-label mb-1"> CANTIDAD<span class="tx-danger"></span></label>
                                <input class="form-control" id="cantidad" name="cantidad" type="text"   >
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-layout-footer">
                            <br>
                                <input type="submit" class="btn btn-success" value="Agregar al Detalle">
                            </div>
                        </div>
                    </div> 
                </div>   
                
                <hr>
                <div class="table">
                    <table class="table table-bordered">
                        <thead class="thead-colored thead-primary">
                            <tr>
                                
                            <th class="wd-5p">ITEM</th>  
                            <th class="wd-7p">SERVICIO</th>  
                            <th class="wd-7p">CANTIDAD</th> 
                            <th class="wd-7p">P/U</th> 
                            <th class="wd-7p">SUBTOTAL</th> 
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
                </div>  
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-9">  </div>
                    <div class="col-md-3"> 
                        <label for=""><b> TOTAL A PAGAR: {{$total_pagar}}</b></label>
                    </div>
                     
                </div>
                
            </form> 

    </div> 
    <div class="col-md-1">
                    <a href="{{route('venta.reporte_venta_id', $venta->id)}}"><button class="btn btn-danger">FINALIZAR VENTA</button></a>
                </div> 
</div>            
@endsection