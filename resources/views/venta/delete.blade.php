<!-- Modal -->
<div class="modal fade" id="modal_delete-{{$person->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('venta.delete', $venta->id)}}" method="post">
        @csrf 
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <div class="alert alert-warning alert-bordered pd-y-20" role="alert">        
                    <div class="d-sm-flex align-items-center justify-content-start">
                        <i class="icon ion-alert-circled alert-icon tx-52 tx-warning mg-r-20"></i>
                        <div class="mg-t-20 mg-sm-t-0">
                            <h5 class="mg-b-2 tx-warning">Alerta!  </h5>
                            <p class="mg-b-0 tx-gray">¿Deseas eliminar a <b> ? </b></p>
                        </div>
                    </div> 
                </div> 
            </div>
    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-danger" value="Aceptar"> 
            </div>
        </div>
    </form>
  </div>
</div> 
