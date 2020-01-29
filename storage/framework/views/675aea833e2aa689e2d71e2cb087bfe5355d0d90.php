<?php $__env->startSection('contenido'); ?>

    <section class="content-header">
      <h1>
                 Alta de Nuevo Trabajador
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e('inicio'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo e('trabajadores'); ?>">Trabajadores</a></li>
        <li class="active">Alta Trabajador</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Sección de Registro Trabajador</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "<?php echo e(route('guardatrabajador')); ?>" method = "POST" enctype='multipart/form-data'>
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label>Id Trabajador :</label>
<input type="text" class="form-control" name = 'id_trabajador' value="<?php echo e($idts); ?>" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nombre_tra' value="<?php echo e(old('nombre_tra')); ?>" required placeholder="Ej. Pedro Juan">
<?php if($errors->first('nombre_tra')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('nombre_tra')); ?></span> </i> 
<?php endif; ?>                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_tra' value="<?php echo e(old('ap_tra')); ?>" required placeholder="Ej. Lopéz">
<?php if($errors->first('ap_tra')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('ap_tra')); ?></span> </i> 
<?php endif; ?>                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_tra' value="<?php echo e(old('am_tra')); ?>" required placeholder="Ej. Herrera">
<?php if($errors->first('am_tra')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('am_tra')); ?></span> </i> 
<?php endif; ?>                                
								</div>								
 <div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" class="custom-control-input" VALUE='M'CHECKED>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2" VALUE='F'>Femenino</label>
                                        </div>                            
								</div>	
								
	<div class="form-group">
                                    <label>Cedula Profesional: </label>
                                    <input type="text" class="form-control" name = 'cedula_profesional' value="<?php echo e(old('cedula_profesional')); ?>" required placeholder="Ej.12345678">
<?php if($errors->first('cedula_profesional')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('cedula_profesional')); ?></span> </i> 
<?php endif; ?>                                
								</div>		
	<div class="form-group">
                                    <label>Turno: </label>
                                    <input type="text" class="form-control" name = 'turno' value="<?php echo e(old('turno')); ?>" required placeholder="Ej.Nocturno A">
<?php if($errors->first('turno')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('turno')); ?></span> </i> 
<?php endif; ?>                                
								</div>		
<div class="form-group">
                                    <label>Dias Laborales: </label>
                                    <input type="text" class="form-control" name = 'dias_laborales' value="<?php echo e(old('dias_laborales')); ?>" required placeholder="1-7">
<?php if($errors->first('dias_laborales')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('dias_laborales')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
<div class="form-group">
                                    <label>Hora de Entrada: </label>
                                    <input type="time" class="form-control" name = 'hr_entrada' value="<?php echo e(old('hr_entrada')); ?>" required >
<?php if($errors->first('hr_entrada')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('hr_entrada')); ?></span> </i> 
<?php endif; ?>                                
								</div>									
<div class="form-group">
                                    <label>Hora de Salida: </label>
                                    <input type="time" class="form-control" name = 'hr_salida' value="<?php echo e(old('hr_salida')); ?>" required >
<?php if($errors->first('hr_salida')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('hr_salida')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
								<div class="form-group">
                                    <label>Especialidad: </label>
                                    <input type="text" class="form-control" name = 'especialidad' value="<?php echo e(old('especialidad')); ?>" required placeholder="Ing./Lic. En:">
<?php if($errors->first('especialidad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('especialidad')); ?></span> </i> 
<?php endif; ?>                                
								</div>
	<div class="form-group">
                                    <label>Escolaridad: </label>
                                    <input type="text" class="form-control" name = 'escolaridad' value="<?php echo e(old('escolaridad')); ?>" required placeholder="Primaria/Secundaria/Preparatoria/...:">
<?php if($errors->first('escolaridad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('escolaridad')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
							
								
						
								<div class="form-group">
<label for="example-email">Correo Electronico:</label>

<input type="email" id="example-email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="tucorreo@gmail.com" required>
<?php if($errors->first('email')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('email')); ?></span> </i> 
<?php endif; ?>
</div>
	<div class="form-group">
                                    <label>RFC: </label>
                                    <input type="text" class="form-control" name = 'rfc' value="<?php echo e(old('rfc')); ?>" required placeholder="Ej.ABCD123456EFG">
<?php if($errors->first('rfc')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('rfc')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
<div class="form-group">
                                    <label>Seleccione área</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name='area'>
                                        <option value="Quirofano" selected>Quirofano</option>
                                        <option value="Urgencias">Urgencias</option>
                                        <option value="Triage">Traige</option>
                                        <option value="Archivo">Archivo</option>
										<option value="Sistemas">Sistemas</option>
                                    </select>
</div>
									
<div class="form-group">
                                    <label>Seleccione unidad medica : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
                                        <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($uni->id_unidad); ?>'><?php echo e($uni->nom_unidad); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
</div>
 
							  
<div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>


</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

















<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>