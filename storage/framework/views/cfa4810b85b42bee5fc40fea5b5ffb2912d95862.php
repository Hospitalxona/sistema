<?php $__env->startSection('contenido'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-3.2.1.js')); ?>"></script> 

<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Programacion de Cita</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
									<li class="breadcrumb-item">
                                        <a href="<?php echo e('pacientes'); ?>">Pacientes</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Alta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action="<?php echo e(route('gcitapobabi')); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>


<div class="form-group">
<label>Clave de Cita:</label>
<input type="text" class="form-control" name = 'id_citapobabi' value="<?php echo e($idcpa); ?>" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nom_paciente' value="<?php echo e($poblacion->nom_paciente); ?>" required placeholder="Ej. Pedro Juan" readonly ='readonly'>
                               
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_paciente' value="<?php echo e($poblacion->ap_paciente); ?>" required placeholder="Ej. Lopéz"
                                    readonly ='readonly'>                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_paciente' value="<?php echo e($poblacion->am_paciente); ?>" required placeholder="Ej. Herrera"
                                    readonly ='readonly'>
                               
								</div>

     <div class="form-group">
                                    <label>Fecha: </label>
                                    <input type="date" class="form-control" name = 'fecha' value="fecha">

                                </div>

     <div class="form-group">
                                <label>Hora: </label>
                                <input type="time" class="form-control" name="hora" value="00:00:00" max="23:59:00" min="00:00:00" step="1">                                
                                </div>

<div class="form-group">
                        <label>Seleccione Área Medica</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name='area_med'>
                            <option value="Ginecologia" selected>Ginecologia</option>
                            <option value="Pediatria">Pediatria</option>
                            <option value="Cirugia">Cirugia</option>
                            <option value="Nutricion">Nutricion</option>
                            <option value="Odontologia">Odontologia</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="Consulta Externa">Consulta Externa</option>
                        </select>
</div>

 <div class="form-group">
                                <label>Seleccione Numero de Consultorio: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'num_consul'>
                                        <?php $__currentLoopData = $consultorio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value = '<?php echo e($con->num_consul); ?>'><center><?php echo e($con->num_consul); ?></center></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>              
                                </div>

 <div class="form-group">
                                <label>Seleccione Doctor: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'doctor'>
                                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value = '<?php echo e($doc->nom_doc); ?> <?php echo e($doc->ap_doc); ?> <?php echo e($doc->am_doc); ?>'>
                                    <?php echo e($doc->nom_doc); ?>

                                    <?php echo e($doc->ap_doc); ?>

                                    <?php echo e($doc->am_doc); ?>

                                    </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>              
                                </div>						
	
<div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Programar Cita'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>
</form>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>