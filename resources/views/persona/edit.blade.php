@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Editar Persona</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('persona.update', $persona->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-layout form-layout-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nombres: <span class="tx-danger"></span></label>
                            <input class="form-control" name="nombre" value="{{$persona->nombre}}"  type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Paterno: <span class="tx-danger"></span></label>
                            <input class="form-control" name="apellido_pat" value="{{$persona->apellido_pat}}"  type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Apellido Materno: <span class="tx-danger"></span></label>
                            <input class="form-control" name="apellido_mat" value="{{$persona->apellido_mat}}"  type="text"  >
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Nac.: <span class="tx-danger"></span></label>
                            <input class="form-control" name="fecha_nac" value="{{$persona->fecha_nac}}"  type="date"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Tipo Doc.: <span class="tx-danger"></span></label>
                            <input class="form-control" name="tipo_doc" value="{{$persona->tipo_doc}}"  type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Cédula Identidad: <span class="tx-danger"></span></label>
                            <input class="form-control" name="numero_doc" value="{{$persona->numero_doc}}"  type="number"  >
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">sexo: <span class="tx-danger"></span></label>
                            <input class="form-control" name="sexo" value="{{$persona->sexo}}"  type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Celular: <span class="tx-danger"></span></label>
                            <input class="form-control" name="celular" value="{{$persona->celular}}"  type="number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger"></span></label>
                            <input class="form-control" name="email" value="{{$persona->email}}"  type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Direccion: <span class="tx-danger"></span></label>
                            <input class="form-control" name="direccion" value="{{$persona->direccion}}"  type="text">
                        </div>
                    </div> 
                </div> 
                
            </div> 
            <div class="form-layout-footer">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <button class="btn btn-[teal]" >
                        <a href="javascript:history.back()">Cancelar</a>
                        </button>  
            </div> 
        </form>
    </div> 
</div>            
 
@endsection