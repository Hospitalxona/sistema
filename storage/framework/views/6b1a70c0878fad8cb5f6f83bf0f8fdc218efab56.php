<form action="<?php echo e(route('modimotivo2')); ?>"  method="POST" v-on:submit.prevent="createKeep">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<label for="motivo">Motivo de faltante del medicamento 1</label>
				<input type="text" name="motivo" class="form-control" v-model="motivo">
			</div>
			<div class="modal-body">
				<label for="motivo2">Motivo de faltante del medicamento 2</label>
				<input type="text" name="motivo2" class="form-control" v-model="motivo2">
			</div>
			<div class="modal-body">
				<label for="motivo3">Motivo de faltante del medicamento 3</label>
				<input type="text" name="motivo3" class="form-control" v-model="motivo3">
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar" id="guardar">
			</div>
		</div>
	</div>
</div>
</form>