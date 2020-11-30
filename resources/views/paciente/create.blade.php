@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Paciente</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('paciente.store')}}" method="post">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Apellidos: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text"  >
                        </div>
                    </div> 
                    <div class="col-lg-8">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Tipo Documento: <span class="tx-danger">*</span></label>
                        <select class="form-control select2" data-placeholder="Cédula Identidad">
                        <option label="Cédula Identidad"></option> 
                        <option value="UK">Pasaporte</option>
                        <option value="China">Licencia </option> 
                        </select>
                    </div>
                </div> 
            </div> 
            <div class="form-layout-footer">
                <button class="btn btn-info tx-center"> <i class="menu-item-icon icon ion-android-send  tx-14"> </i>Guardar</button> 
                <button class="btn btn-secondary">Cancel</button>
                <a href="javascript:history.back()">Ir al listado</a>
            </div> 
        </form>
    </div> 
</div>            
 
@endsection