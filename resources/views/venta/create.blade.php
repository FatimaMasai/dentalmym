@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Venta</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form id="form" action="{{route('venta.store')}}" method="post">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1"> PACIENTE<span class="tx-danger">*</span></label>
                                <select name="id_paciente" id="id_paciente" class="form-control">
                                    <option> SELECCIONAR </option> 
                                    @foreach($paciente as $pacient)
                                    <option value="{{$pacient->id}}">{{$pacient->persona->nombre}} </option>
                                    @endforeach 
                                </select>
                        </div> 
                    </div> 
                </div> 
            </div>
            <div>
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">Agregar Servicio</h6>
                <div class="form-layout">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="x_card_code" class="control-label mb-1"> SERVICIO<span class="tx-danger"></span></label>
                                    <select name="id_servicio" id="id_servicio" class="form-control">
                                        <option value="">Seleccionar</option>
                                        @foreach($servicios as $serv)
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
                                <a href="{{route('venta.agregar_servicio', ['servicio_id' => 'servicio_id', 'cantidad' => 'cantidad', 'acumulado' => 'acumulado'])}}" class="btn btn-success detalle" id="agregarservicio">
                                    Agregar al Detalle
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>   
                
                <hr>
                <div id="detalleservicio">
                    @include('venta.aside.detalleservicio')
                </div>
                
                   
            </div> 
            <div class="form-layout-footer">
                <input type="submit" class="btn btn-danger guardar" value="GUARDAR VENTA">
              
            </div>
        </form>
    </div> 
</div>            
@section('localscript')
<script>
    $(document).on("click", ".detalle", function() {
        event.preventDefault();
        var servicio_id = $('#id_servicio').val();
        var cantidad = $('#cantidad').val();
        var acumulado = $('#acumulado').val();
        console.log('acumulado: ' + acumulado);
        var route = $('#agregarservicio').attr('href').replace('servicio_id', servicio_id).replace('cantidad', cantidad).replace('acumulado', acumulado);
        var form = $('#form');
        
        //console.log('tabla: ' + $('#detalletable tbody tr:last'));
        //alert(route);
        
        
        $.get(route, form.serialize(), function(result){
            //alert(result);
            $('#detalletable tbody tr:last').remove();
            $('#detalletable tbody').append(result);
        });


        
        return false;
    });

    
 </script>
@endsection    
@endsection

