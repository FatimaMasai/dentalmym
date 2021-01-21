@extends('layouts.app')
@section('slider')

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Venta</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form id="form" action="{{route('pago.store')}}" method="post">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1"> VENTAS<span class="tx-danger">*</span></label>
                                <a id="route_detalle_pagos" href="{{route('pago.detalle_pagos', 'id_venta')}}"></a>
                                <select name="id_venta" id="id_venta" class="form-control">
                                    <option> SELECCIONAR </option>
                                    @foreach($ventas as $venta)
                                    <option value="{{$venta->id}}">
                                        <strong>ID:</strong> {{$venta->id}}, PACIENTE: {{$venta->paciente->persona->nombre}}, Total: {{$venta->total}}, TIPO: {{$venta->tipoventa->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                </div>

            </div>
            <div id="detallepagos">
                @include('pago.aside.detallepagos')
            </div>

            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="hidden" name="saldoanterior" id="saldoanterior">
                                <label for="x_card_code" class="control-label mb-1">MONTO PAGO<span class="tx-danger"></span></label>
                                <input class="form-control" id="pago" name="pago" type="number"   >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="x_card_code" class="control-label mb-1">SALDO<span class="tx-danger"></span></label>
                                <input class="form-control" id="saldo" name="saldo" type="number"   >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-layout-footer">
                <input type="submit" class="btn btn-danger guardar" value="GUARDAR PAGO">
            </div>
        </form>
    </div>
</div>
@section('localscript')
<script>
    $(document).on("change", "#id_venta", function() {
        event.preventDefault();
        console.log('seleccionar venta');
        var id_venta = $(this).val();
        var route = $('#route_detalle_pagos').attr('href').replace('id_venta', id_venta);
        $.get(route, function(result){
            $('#detallepagos').html(result);
        });
    });

    $(document).on("change", "#pago", function() {
        event.preventDefault();
        var saldoanterior = $('#detallepagostable tbody tr:last td:last').text();
        $('#saldoanterior').val(saldoanterior);
        var saldo = saldoanterior - $(this).val();
        $('#saldo').val(saldo);
    });

 </script>
@endsection
@endsection

