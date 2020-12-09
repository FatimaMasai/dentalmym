@extends('layouts.app')
@section('slider')  
  
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Agregar Paciente</h6>
        <p class="mg-b-30 tx-gray-600"> </p>
        <form action="{{route('doctor.update', $doctor->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                    <div class="col-lg-4"> 
                        <div class="form-group">
                            <label for="x_card_code" class="control-label mb-1">  DOCTOR</label>
                                <select name="id_persona" value="{{$doctor->persona->nombre}}"  id="id_persona" class="form-control"> 
                                    @foreach($persona as $person)
                                      <option value="{{$person->id}}">{{$person->nombre}} {{$person->apellido_pat}} {{$person->apellido_mat}} </option>
                                    @endforeach 
                                </select> 
                        </div> 
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ESPECIALIDAD: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="especialidad" value="{{$doctor->especialidad}}"  type="text"  >
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