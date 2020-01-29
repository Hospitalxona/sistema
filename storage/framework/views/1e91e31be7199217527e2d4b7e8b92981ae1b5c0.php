<?php $__env->startSection('js'); ?>

<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script> 


<script>
$(document).ready(function(){

	$("#historico_movimientos").hide();
		
		$("#historial").click(function(){
			$('#historico_movimientos').show();
			
		});		
		$("#historial").dblclick(function(){
			$('#historico_movimientos').hide();		
		});

		$("#famili").click(function(){
			$("#historico_movimientos").hide();
			
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
                        <h4 class="page-title">Expediente Paciente</h4>
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
        <div class="col-lg-4 col-xlg-3 col-md-5">
		<?php echo e(csrf_field()); ?>

                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title m-t-10"><?php echo e($expedientes->id_expediente); ?></h4>
									<input type='text' id='nid' value='<?php echo e($expedientes->id_expediente); ?>' name='nid'  hidden>
                                    <h6 class="card-subtitle">Id del Expediente</h6>
       
	  	   <h4 class="card-title m-t-10"><a  <?php if(Session::get('sesiontipo')=="Archivo"): ?>
 href="<?php echo e(URL::action('carchivo@prestamoexpediente',['id_expediente'=>$expedientes->id_expediente])); ?>"<?php endif; ?>>
 <?php echo e($expedientes->ubicacion); ?></a></h4>

	
                                    <div class="form-group">
		<h5>Ubicación Actual </h5>
</div>

                            </div>
                        </div>
						
			
                            <div class="card-body">
							 <strong><h4>Información afiliación</h4></strong>
						 <h4 class="card-title m-t-10"><?php echo e($pacientes->num_afiliacion); ?></h4>
                                    <h6 class="card-subtitle">Numero de Afilicacion</h6>
       <h4 class="card-title m-t-10"><?php echo e($unidades->clues); ?></h4>
                                    <h6 class="card-subtitle">CLUES</h6>
		<h4 class="card-title m-t-10"><?php echo e($unidades->nom_unidad); ?></h4>
                                    <h6 class="card-subtitle">Unidad Médica</h6>

						 
						 </div>
                    </div>
									

<!-- Column -->	
	<div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
									<center><label class="col-md-20">Ubicaciones Anteriores</label></center>
                                        <div align='center'>
		<div id='nresultado'>
			<div id='historico_movimientos'>
			
				<!-- HISTORICO UBICACIONES -->
				<h1 align='center'>Registro de Movimientos Expediente</h1><br>
				<?php if($historial->isEmpty()): ?>  
				<h2>No hay elementos que mostrar</h2>
				
				<?php else: ?>			
				
				<table class="table table-striped">
				 
				<thead>
				<tr class="table-active" title='tabla'>
				<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nombre Trabajador que tomo expediente</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Área requisicion</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Fecha y hora petición</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Estatus</th>

				</tr>
				</thead>
				<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CARCHIVO  -->

				<tbody>
				<?php $__currentLoopData = $historial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $his): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				<th class="table-active" scope="row"><?php echo e($his->ap_tra.' '.$his->am_tra.' '.$his->nombre_tra); ?></th>
				<td><?php echo e($his->nombre_area); ?></td>
				<td>
				<?php echo e(\Carbon\Carbon::parse($his->created_at)->format('D, d M \'Y, h:i A')); ?></td>


					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>

				</table>
				<?php endif; ?>
			</div>
                                </form>
                            </div>
					</div> 
									
							
</table>


			           
				<!-- Paginacion  -->
<div class="col-md-10 col-md-offset-1">

	<!--  ESTA ES LA SECCION DONDE SE CARGAN LOS DATOS -->
	

	<div align='center'>
		<div id='nresultado'>
			<div id='historico_movimientos'>
			
				<!-- HISTORICO UBICACIONES -->
				<h1 align='center'>Registro de Movimientos Expediente</h1><br>
				<?php if($historial->isEmpty()): ?>  
				<h2>No hay elementos que mostrar</h2>
				
				<?php else: ?>			
				
				<table class="table table-striped">
				 
				<thead>
				<tr class="table-active" title='tabla'>
				<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nombre Trabajador que tomo expediente</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Área requisicion</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Fecha y hora petición</th>
				<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Estatus</th>

				</tr>
				</thead>
				<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CARCHIVO  -->

				<tbody>
				<?php $__currentLoopData = $historial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $his): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				<th class="table-active" scope="row"><?php echo e($his->ap_tra.' '.$his->am_tra.' '.$his->nombre_tra); ?></th>
				<td><?php echo e($his->nombre_area); ?></td>
				<td>
				<?php echo e(\Carbon\Carbon::parse($his->created_at)->format('D, d M \'Y, h:i A')); ?></td>


					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>

				</table>
				<?php endif; ?>
			</div>
				
			
			



<style type="text/css">
content: "\f464";
</style>

			<!-- End Container fluid  -->
    <?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>