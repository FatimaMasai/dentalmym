@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Ver Paciente</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form>
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">  PACIENTE</label>
                            <input class="form-control" value="{{$paciente->persona->nombre}} {{$paciente->persona->apellido_pat}} {{$paciente->persona->apellido_mat}}"  type="text"  >    
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ALERGIA: <span class="tx-danger"></span></label>
                            <input class="form-control" name="alergia" value="{{$paciente->alergia}}"  type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">OBSERVACION: <span class="tx-danger"></span></label>
                            <input class="form-control"  name="observacion"  value="{{$paciente->observacion}}" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">RESPONSABLE: <span class="tx-danger"></span></label>
                            <input class="form-control" name="responsable"  value="{{$paciente->responsable}}" type="text"  >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ANTECEDENTES: <span class="tx-danger"></span></label>
                            <input class="form-control" name="antecedentes" value="{{$paciente->antecedentes}}"  type="text" >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label class="form-control-label">RECOMENDADO: <span class="tx-danger"></span></label>
                        <input class="form-control" name="recomendado" value="{{$paciente->recomendado}}"  type="text" >
                    </div>
                </div> 
            </div> 
            <div class="form-layout-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
                <button class="btn btn-[teal]" >
                <a href="javascript:history.back()"   >Cancelar</a>
                </button>  
            </div>
        </form>
    </div> 
</div>            
 
@endsection