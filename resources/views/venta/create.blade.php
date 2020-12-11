@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Venta</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('venta.store')}}" method="post">
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
                    <div class="col-lg-4"> 
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">   SERVICIO<span class="tx-danger">*</span></label>
                                <select name="id_servicio" id="id_servicio" class="form-control">
                                    <option value=" "> SELECCIONAR </option> 
                                    @foreach($servicio as $servici)
                                    <option value="{{$servici->id}}">{{$servici->nombre}} </option>
                                    @endforeach 
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">GLOSARIO: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="glosario" type="text"  >
                        </div>
                    </div> 
                </div> 
            </div> 
            <div class="form-layout-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
              
            </div>
        </form>
    </div> 
</div>            
 
@endsection