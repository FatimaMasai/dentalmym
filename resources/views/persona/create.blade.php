@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Persona</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('persona.store')}}" method="POST">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="nombre" required type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="apellido_pat" required type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="apellido_mat" required type="text"  >
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Nac.: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="fecha_nac" required type="date"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Tipo Doc.: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="tipo_doc" required type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Cédula Identidad: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="numero_doc" required type="number"  >
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="sexo" required type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Celular: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="celular" required type="number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="email" required type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Direccion: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="direccion" required type="text">
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