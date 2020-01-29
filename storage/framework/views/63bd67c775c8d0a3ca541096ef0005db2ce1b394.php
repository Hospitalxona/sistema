<?php $__env->startSection('receta'); ?>
           <div class="page-breadcrumb">
                <div class="row">
                 <div class="col-5 align-self-center">
                        <h4 class="page-title">Modificar Familiar</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes Digitales </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                
               <center>
                <h2>Modificar Familiar</h2>
            
              <center>

                </div>
            </div>
<?php $__env->stopSection(); ?> 


<?php $__env->startSection('contenido'); ?>
<div class="panel panel-default">
	<div class="panel-body">
	
		<form role="form" class="form-horizontal"  id='familia' action="<?php echo e(route('modfamiliar')); ?>" method="POST">
			<?php echo e(csrf_field()); ?>


			<div class="form-group">
				<label for="num_afiliacion" class="col-md-4 control-label">Número de Afiliación:</label>

				<div class="col-md-6">
					<input id="num_afiliacion" type="text" class="form-control" name="num_afiliacion" required autofocus value="<?php echo e($pacientes->num_afiliacion); ?>" readonly>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="num_afiliacion" class="col-md-4 control-label">Folio:</label>

				<div class="col-md-6">
					<input id="folio" type="text" class="form-control" name="folio" required autofocus value="<?php echo e($expedientes->folio); ?>" readonly>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="ap_paciente" class="col-md-4 control-label">Apellido Paterno:</label>

				<div class="col-md-6">
					<input id="ap_paciente" type="text" class="form-control" name="ap_paciente" required autofocus value="<?php echo e($pacientes->ap_paciente); ?>" required='true' lettersonly='true'>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="ap_paciente" class="col-md-4 control-label">Apellido Materno:</label>

				<div class="col-md-6">
					<input id="am_paciente" type="text" class="form-control" name="am_paciente" required autofocus value="<?php echo e($pacientes->am_paciente); ?>">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="nom_paciente" class="col-md-4 control-label">Nombres(s):</label>

				<div class="col-md-6">
					<input id="nom_paciente" type="text" class="form-control" name="nom_paciente" required autofocus value="<?php echo e($pacientes->nom_paciente); ?>">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="curp" class="col-md-4 control-label">CURP:</label>

				<div class="col-md-6">
					<input id="curp" type="text" class="form-control" name="curp" required autofocus value="<?php echo e($pacientes->curp); ?>">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="parentesco" class="col-md-4 control-label">Parentesco:</label>
	
				<div class="col-md-6">
					<input id="parentesco" type="text" class="form-control" name="parentesco" required autofocus value="<?php echo e($expedientes->parentesco); ?>">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="sexo" class="col-md-4 control-label">Sexo:</label>
	
				<div class="col-md-6">
					<input id="sexo" type="radio" name="sexo" required autofocus   value='M'<?php if($pacientes->sexo=='M'): ?> echo checked="checked"; <?php endif; ?>>
					<label>Masculino</label>
					<br>
					<input id="sexo" type="radio" name="sexo" required autofocus value='F' <?php if($pacientes->sexo=='F'): ?> echo checked="checked"; <?php endif; ?>>
					<label>Femenino</label>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<input type="text" value="<?php echo e($expedientes->id_expediente); ?>" id="id_expediente" name="id_expediente" hidden>
			<input type="text" value="<?php echo e($pacientes->id_paciente); ?>" id="id_paciente" name="id_paciente" hidden>
			
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<input type="submit" class="btn btn-primary" value='Actualizar' data-form='familia'>
						
					
					<button type='reset' class="btn btn-warning">Limpiar</button>
				</div>
			</div>
		</form>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>