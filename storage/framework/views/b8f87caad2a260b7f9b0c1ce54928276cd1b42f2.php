<?php $__env->startSection('estilos'); ?>

<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script> 

<script>
$(document).ready(function(){

    $("#historico_citas_ind").hide();
    
        $("#historial").click(function(){
            $("#historico_citas_ind").hide(); 
        });
        
        $("#histcitas").click(function(){
            $("#historico_citas_ind").show();           
        });     

        $("#histcitas").dblclick(function(){
            $('#historico_citas_ind').hide();       
        });
                
    });         
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Paciente</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('../inicio'); ?>">Inicio</a>
                                    </li>
									<li class="breadcrumb-item">
                                        <a href="<?php echo e('../expedientes'); ?>">Expedientes</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Revisar</li>
                                </ol>
                            </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
 <div class="row">	   
                    <!-- /# column -->
        <div class="col-lg-5 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title m-t-10"><?php echo e($poblacion->id_pob_abie); ?></h4>
									<input type='text' id='id' value='<?php echo e($poblacion->id_pob_abie); ?>' name='id'  hidden>
                                    <h6 class="card-subtitle">Id del Paciente</h6>
       <h4 class="card-title m-t-10"><?php echo e($poblacion->curp); ?></h4>
                                    <h6 class="card-subtitle">CURP</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" align="center">
                                    <button id='histcitas' class='btn btn-success'>
                                        <img src="<?php echo e(asset('principal\assets\images\historial.png')); ?>" >
                                        Ver Historial de Citas 
                                    </button>
                            </div>
                        </div>

</div>
<!-- Column -->

	<div class="col-lg-7 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
									<center><label class="col-md-20">Información del Paciente</label></center>
                                        <label class="col-md-12">Nombre Completo: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($poblacion->ap_paciente.' '.$poblacion->am_paciente.' '.$poblacion->nom_paciente); ?>' class="form-control form-control-line"readonly>
                                        </div>
										</div>
									<div class="form-group">
										<label class="col-md-12">Edad: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($poblacion->edad); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Fecha de Nacimiento:</label>
                                        <div class="col-md-12">
                                            <input type="date" value = '<?php echo e($poblacion->fecha_nacimiento); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Telefono: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($poblacion->telefono); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Vialidad: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '<?php echo e($poblacion->nom_vialidad); ?>' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Sexo: </label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" 
											<?php if($poblacion->sexo=='M'): ?> echo value = 'Masculino'; <?php endif; ?>
											<?php if($poblacion->sexo=='F'): ?> echo value = 'Femenino'; <?php endif; ?>											
											readonly>
											
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>				
					</div>		

</div>
<!-- End Container fluid  -->
<div class="table-responsive">

    <!--  ESTA ES LA SECCION DONDE SE CARGAN LOS DATOS -->

<div align='center'>
    <div id='nresultado'>
        <div id='historico_citas_ind'>
        <h1 align='center'>Historial de Citas</h1><br>
        <table class="table table-striped">
            <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Área médica</th>
            <th>Consultorio</th>
            <th>Doctor</th>
            </tr>
            <?php $__currentLoopData = $citaspobabi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chpa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($chpa->fecha); ?></td>
                <td><?php echo e($chpa->hora); ?></td>
                <td><?php echo e($chpa->area_med); ?></td>
                <td><?php echo e($chpa->num_consul); ?></td>
                <td><?php echo e($chpa->doctor); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>