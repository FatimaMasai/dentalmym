@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Tipo Servicio</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        @include('tiposervicio.error')
        <form action="{{route('tiposervicio.store')}}" method="POST">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="nombre"  type="text"  >
                        </div>
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