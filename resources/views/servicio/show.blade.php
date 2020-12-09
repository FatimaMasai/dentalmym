@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Ver Servicio</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form  > 
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">  TIPO SERVICIO<span class="tx-danger">*</span></label>
                            <input class="form-control" value="{{$servicio->tiposervicio->nombre}}"  type="text"  >    
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">SERVICIO: <span class="tx-danger">*</span></label>
                            <input class="form-control"  name="nombre"  value="{{$servicio->nombre}}" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">PRECIO: <span class="tx-danger">*</span></label>
                            <input class="form-control"  name="precio"  value="{{$servicio->precio}}" type="text">
                        </div>
                    </div>   
                </div> 
            </div> 
            <div class="form-layout-footer"> 
              
            </div>
        </form>
    </div> 
</div>            
 
@endsection