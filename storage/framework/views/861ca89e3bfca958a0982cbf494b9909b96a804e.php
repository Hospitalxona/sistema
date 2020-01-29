<?php $__env->startSection('contenido'); ?>

<script type="text/javascript" src="<?php echo e(asset('js/jquery-3.2.1.js')); ?>"></script> 

    <section class="content-header">
      <h1>
         Alta de Nuevo Paciente
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e('inicio'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="<?php echo e('pacientes'); ?>">Pacientes</a></li>
        <li class="active">Alta Paciente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Sección de Registro Paciente</h3>

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

<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "guardapaciente" method = "POST" >
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label>Id Paciente :</label>
<input type="text" class="form-control" name = 'id_paciente' value="<?php echo e($idps); ?>" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nom_paciente' value="<?php echo e(old('nom_paciente')); ?>" required placeholder="Ej. Pedro Juan">
<?php if($errors->first('nom_paciente')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('nom_paciente')); ?></span> </i> 
<?php endif; ?>                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_paciente' value="<?php echo e(old('ap_paciente')); ?>" required placeholder="Ej. Lopéz">
<?php if($errors->first('ap_paciente')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('ap_paciente')); ?></span> </i> 
<?php endif; ?>                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_paciente' value="<?php echo e(old('am_paciente')); ?>" required placeholder="Ej. Herrera">
<?php if($errors->first('am_paciente')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('am_paciente')); ?></span> </i> 
<?php endif; ?>                                
								</div>

 <div class="form-group">
                                    <label>CURP: </label>
                                    <input type="text" class="form-control" name = 'curp' value="<?php echo e(old('curp')); ?>" required placeholder="Ej. BADD110313HCMLNS09">
<?php if($errors->first('curp')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('curp')); ?></span> </i> 
<?php endif; ?>                                
								</div>
								 <div class="form-group">
<label>Telefono: </label>
                                    <input type="text" class="form-control" name = 'telefono' value="<?php echo e(old('telefono')); ?>" required placeholder="Ej. 1234567890">
<?php if($errors->first('telefono')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('telefono')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
								 <div class="form-group">
<label>Edad: </label>
                                    <input type="text" class="form-control" name = 'edad' value="<?php echo e(old('edad')); ?>" required placeholder="Ej. 23">
<?php if($errors->first('edad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('edad')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
							
								<div class="form-group">
                                    <label>Fecha de Nacimiento: </label>
                                    <input type="date" class="form-control" name = 'fecha_nacimiento' value="<?php echo e(old('fecha_nacimiento')); ?>" required >
<?php if($errors->first('fecha_nacimiento')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('fecha_nacimiento')); ?></span> </i> 
<?php endif; ?>                                
								</div>
<div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" class="custom-control-input" VALUE='M'CHECKED>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" class="custom-control-input" VALUE='F'>
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
								</div>		
	<div class="form-group">
                                    <label>Afiliación Seguro: </label>
                                    <input type="text" class="form-control" name = 'afiliacion_seguro' value="<?php echo e(old('afiliacion_seguro')); ?>" required placeholder="Ej. IMMS,ISSTE...">
<?php if($errors->first('afiliacion_seguro')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('afiliacion_seguro')); ?></span> </i> 
<?php endif; ?>                                
								</div>
<div class="form-group">
                                    <label>Número de Afiliación: </label>
                                    <input type="text" class="form-control" name = 'num_afiliacion' value="<?php echo e(old('num_afiliacion')); ?>" required placeholder="Ej. 765267">
<?php if($errors->first('num_afiliacion')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('num_afiliacion')); ?></span> </i> 
<?php endif; ?>                                
								</div>								
 <div class="form-group">
                                <label>Seleccione entidad de nacimiento: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_estado'>
                                        <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($edo->id_estado); ?>'><?php echo e($edo->nombre); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>         
								</div>								
							<div class="form-group">
                                    <label>Seleccione su municipio : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_municipio'>
                                        <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($mun->id_municipio); ?>'><?php echo e($mun->nombre_municipio); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
</div>
		<div class="form-group">
                                    <label>Código Postal: </label>
                                    <input type="text" class="form-control" name = 'cp' value="<?php echo e(old('cp')); ?>" required placeholder="Ej. 12345,54321...">
<?php if($errors->first('cp')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('cp')); ?></span> </i> 
<?php endif; ?>                                
								</div>								
	<div class="form-group">
                                    <label>Localidad: </label>
                                    <input type="text" class="form-control" name = 'localidad' value="<?php echo e(old('localidad')); ?>" required placeholder="Ej. San Francisco,Niños Heroés...">
<?php if($errors->first('localidad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('localidad')); ?></span> </i> 
<?php endif; ?>                                
								</div>
			<div class="form-group">
                                    <label>Tipo de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'tipo_vialidad' value="<?php echo e(old('tipo_vialidad')); ?>" required placeholder="Ej. Calle,Avenida,Boulevard...">
<?php if($errors->first('tipo_vialidad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('tipo_vialidad')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
	 	<div class="form-group">
                                    <label>Nombre de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'nom_vialidad' value="<?php echo e(old('nom_vialidad')); ?>" required placeholder="Ej. Juarez,Independencia...">
<?php if($errors->first('nom_vialidad')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('nom_vialidad')); ?></span> </i> 
<?php endif; ?>                                
								</div>
<div class="form-group">
                                    <label>Numero Exterior: </label>
                                    <input type="text" class="form-control" name = 'num_ext' value="<?php echo e(old('num_ext')); ?>" required placeholder="Ej. 1,2,3...">
<?php if($errors->first('num_ext')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('num_ext')); ?></span> </i> 
<?php endif; ?>                                
								</div>									
<div class="form-group">
                                    <label>Numero Interior: </label>
                                    <input type="text" class="form-control" name = 'num_int' value="<?php echo e(old('num_int')); ?>"  placeholder="Ej. 1,2,3...">
<?php if($errors->first('num_int')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('num_int')); ?></span> </i> 
<?php endif; ?>                                
								</div>
								<div class="form-group">
                                    <label>Tipo de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'tipo_asentamiento' value="<?php echo e(old('tipo_asentamiento')); ?>" required placeholder="Ej. Barrio,Colonia...">
<?php if($errors->first('tipo_asentamiento')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('tipo_asentamiento')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
<div class="form-group">
                                    <label>Nombre de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'nombre_asentamiento' value="<?php echo e(old('nombre_asentamiento')); ?>" required placeholder="Ej. Guadalupe,Indios Verdes...">
<?php if($errors->first('nombre_asentamiento')): ?> 
<i><span class="label label-danger label-rounded"><?php echo e($errors->first('nombre_asentamiento')); ?></span> </i> 
<?php endif; ?>                                
								</div>	
		 <input type="text" name = 'ExpedienteD' value="No" required hidden>														  
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>
</form>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

















<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>