@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Proveedor</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        @include('proveedor.error')
        <form action="{{route('proveedor.store')}}" method="post">
            @csrf
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">  PROVEEDOR</label>
                                <select name="id_persona" id="id_persona" class="form-control">
                                <option value=" "> SELECCIONAR </option> 
                                    @foreach($persona as $person)
                                    <option value="{{$person->id}}">{{$person->nombre}} {{$person->apellido_pat}} {{$person->apellido_mat}} </option>
                                    @endforeach 
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">EMPRESA: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="empresa" type="text"  >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">NIT: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="nit" type="text">
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