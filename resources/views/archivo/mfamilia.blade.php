<div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id='myModalLabel'>Pacientes Afiliados</h4>

				</div>
				<div class="modal-body">
					<form id="frmProducts" name="frmProducts" class="form-horizontal">						
						<div class="form-group">
							<label class="control-label col-sm-2" for="ap_paciente">Apellido Paterno: </label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="ap_paciente">
							</div>
						</div>
						<p class="fname_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="am_paciente">Apellido Materno: </label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="am_paciente">
							</div>
						</div>
						<p class="lname_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nom_paciente">Nombre(s): </label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="nom_paciente">
							</div>
						</div>
						<p class="email_error error text-center alert alert-danger hidden"></p>
						
						<div class="form-group">
							<label class="control-label col-sm-2" for="curp">CURP:</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="curp">
							</div>
						</div>
						<p
							class="country_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="parentesco">Parentesco </label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="parentesco">
							</div>
						</div>
						<p
							class="salary_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="num_afiliacion">Número de Afiliación: </label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="num_afiliacion">
							</div>
						</div>
						<p
							class="salary_error error text-center alert alert-danger hidden"></p>	
					</form>
					
					<div class="modal-footer">
						<button type="button" class="btn actionBtn" data-dismiss="modal">
							<span id="footer_action_button" class='glyphicon'> </span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove'></span> Close
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
