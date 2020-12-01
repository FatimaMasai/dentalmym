@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Doctor</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('doctor.store')}}" method="post">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Especialidad: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
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