<div class="modal fade" id="modifica" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
					 <label for="Primer nombre">Primer nombre:</label>
                    <input value="{{$pac->nom_paciente}}" title="Solo puede ingresar letras en este campo." id="nom_paciente" type="text" class="validate" required>
					<br>
					<label for="Primer nombre">Apellido paterno:</label>
                    <input value="{{$pac->ap_paciente}}" title="Solo puede ingresar letras en este campo." id="ap_paciente" type="text" class="validate" required>
             </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
                <button type="button" class="btn btn-primary"> Aceptar </button>
				</a>
            </div>
        </div>
    </div>
</div>