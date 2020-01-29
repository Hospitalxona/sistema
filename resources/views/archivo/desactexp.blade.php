<div class="modal fade" id="desac">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <b>¿Desea desactivar el expediente?</b>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="{{URL::action('cexpedientes@desactivaex',['id_expediente'=>$fam->id_expediente])}}">
                <button type="button" class="btn btn-primary"> Aceptar </button>
				</a>
            </div>
        </div>
    </div>
</div>