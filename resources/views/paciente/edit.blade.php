@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editar Paciente</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('paciente.update', $paciente->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">  PACIENTE</label>
                                <select name="id_persona" value="{{$paciente->persona->nombre}}"  id="id_persona" class="form-control"> 
                                    @foreach($persona as $person)
                                      <option value="{{$person->id}}">{{$person->nombre}} {{$person->apellido_pat}} {{$person->apellido_mat}} </option>
                                    @endforeach 
                                </select> 
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ALERGIA: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="alergia" value="{{$paciente->alergia}}"  type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">OBSERVACION: <span class="tx-danger">*</span></label>
                            <input class="form-control"  name="observacion"  value="{{$paciente->observacion}}"type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">RESPONSABLE: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="responsable"  value="{{$paciente->responsable}}" type="text"  >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ANTECEDENTES: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="antecedentes" value="{{$paciente->antecedentes}}"  type="text" >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label class="form-control-label">RECOMENDADO: <span class="tx-danger">*</span></label>
                        <input class="form-control" name="recomendado" value="{{$paciente->recomendado}}"  type="text" >
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