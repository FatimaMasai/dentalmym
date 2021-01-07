@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Introduce los datos para crear un Rol</h6>
        <p class="mg-b-30 tx-gray-600"> </p> 
        <form  > 
            <div class="form-layout form-layout-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="nombre" class="form-control-label">Nombre del Rol: <span class="tx-danger"></span></label >
                            <input class="form-control" name="nombre" type="text" value="{{$role->nombre}}"  >
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="form-group"> 
                            <label class="form-control-label" for="descripcion">  Mensaje: <span class="tx-danger"></span></label >
                            <input class="form-control" name="descripcion" type="text" value="{{$role->descripcion}}"  >
                        </div>
                    </div> 
                </div> 
            <div class="form-layout-footer"> 
            <a href="#" class="btn btn-danger" id="{{ $role->id }}" data-method="DELETE"  onclick="enviar_formulario()">Eliminar</a> 



            </div> 
        </form>
        
    </div> 
    <form action="POST" action="{{route('role.destroy', $role->id)}}" name="delete_form">
        @csrf  
    </form>
</div>    
<script>
    function enviar_formulario()
    {
        document.delete_form.submit();
    }
</script>        
 
@endsection