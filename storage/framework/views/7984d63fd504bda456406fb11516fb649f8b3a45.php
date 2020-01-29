<?php $__env->startSection('contenido'); ?>
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Alta de Expediente Digital</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
									<li class="breadcrumb-item">
                                        <a href="<?php echo e('expedientes'); ?>">Expedientes</a>
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
 <form class="form-horizontal m-t-30" action = "guardaexpediente" method = "POST" >
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label>Id Expediente :</label>
<input type="text" class="form-control" name = 'id_expediente' value="<?php echo e($idexs); ?>" readonly ='readonly'>

</div>
<div class="form-group">
                                    <label>Seleccione unidad medica : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
                                        <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($uni->id_unidad); ?>'><?php echo e($uni->nom_unidad); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
</div>
<div class="form-group">
                                    <label>Seleccione al paciente : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_paciente' >
                                        <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($pac->id_paciente); ?>'><?php echo e($pac->nom_paciente.' '.$pac->ap_paciente.' '.$pac->am_paciente); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
</div>
							  <input type="text" name = 'ubicacion' value="Archivo" required hidden>
								 <input type="text" name = 'ExpedienteD' value="Si" required hidden>
									  
									  
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

















<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>