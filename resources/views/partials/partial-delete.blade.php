
   <!-- Modal Core -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
       
        <h4 class="modal-title" id="myModalLabel">Confirmación</h4>
        </div>
        <form id="frmDelete">
            {{csrf_field()}}
            {{method_field('DELETE')}}

        <div class="modal-body">
        <p>¿Desea eliminar el registro?</p> 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger  btn-round" data-dismiss="modal">
            <i class="material-icons">
                highlight_off
                </i>
            Cancelar
        </button>
        <button type="submit" class="btn btn-success  btn-round">
            <i class="material-icons">check_circle</i> Acpetar
        </button>
        </div>
        </form>
    </div>
    </div>
</div>