<?php $__env->startSection('contenido'); ?>
 <body>
 
    
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Prestamo Expediente</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes</li>
                                </ol> 
                            </nav>
                    </div>
                </div>
            </div>
          
  
  <div class="card card-body">
  <form class="form-horizontal m-t-30" action = "<?php echo e(route('guardaprestamoexpediente')); ?>" method = "POST" enctype='multipart/form-data'>
<?php echo e(csrf_field()); ?>



<div class="form-group">
<label>Numero de Expediente:</label>
<input type="text" class="form-control" name = 'id_expediente' value="<?php echo e($expedientes->id_expediente); ?>" readonly ='readonly'>
</div>

<div class="form-group">
    <label>Seleccione Empleado: </label>
        <select class="custom-select col-12" id="inlineFormCustomSelect" name = "id_trabajador">
            <?php $__currentLoopData = $trabajadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value = '<?php echo e($tra->id_trabajador); ?>'>
                <?php echo e($tra->nombre_tra); ?>

                <?php echo e($tra->ap_tra); ?>

                <?php echo e($tra->am_tra); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
</div>

<div class="form-group">
    <label>Seleccione Area: </label>
    <select class="custom-select col-12" id="inlineFormCustomSelect" name = "id_area">
        <?php $__currentLoopData = $areac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ares): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $are): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($are->nombre_area == $ares->ubicacion): ?>
                    <option value = '<?php echo e($are->id_area); ?>' selected>
                    <?php echo e($are->nombre_area); ?>

                    </option>
                <?php else: ?>
                    <option value = '<?php echo e($are->id_area); ?>'>
                    <?php echo e($are->nombre_area); ?>

                    </option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>                                       
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

 <input type="button" value="Alta trabajador" onclick="ventanaNueva('http://localhost/sistema/public/altatra')" />
 <script>
 function ventanaNueva(documento){  
    window.open(documento,'nuevaVentana','width=598, height=1600');
}
</script>
</body>


<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

</div>
</form>
</div>
</div>
</div>

<div align='center'></div>

<style type="text/css">
.pagination {
 display: inline-block;
 padding-left: 0;
 margin: 10px 0;
 border-radius: 4px;
 }
 .pagination > li {
 display: inline;
 }
 .pagination > li > a,
 .pagination > li > span {
 position: relative;
 float: left;
 padding: 6px 12px;
 margin-left: -1px;
 line-height: 1.428571429;
 color: #428bca;
 text-decoration: none;
 background-color: #fff;
 border: 1px solid #ddd;
 }
 .pagination > li:first-child > a,
 .pagination > li:first-child > span {
 margin-left: 0;
 border-top-left-radius: 4px;
 border-bottom-left-radius: 4px;
 }
 .pagination > li:last-child > a,
 .pagination > li:last-child > span {
 border-top-right-radius: 4px;
 border-bottom-right-radius: 4px;
 }
 .pagination > li > a:hover,
 .pagination > li > span:hover,
 .pagination > li > a:focus,
 .pagination > li > span:focus {
 color: #2a6496;
 background-color: #eee;
 border-color: #ddd;
 }
 .pagination > .active > a,
 .pagination > .active > span,
 .pagination > .active > a:hover,
 .pagination > .active > span:hover,
 .pagination > .active > a:focus,
 .pagination > .active > span:focus {
 z-index: 2;
 color: #fff;
 cursor: default;
 background-color: #428bca;
 border-color: #428bca;
 }
 .pagination > .disabled > span,
 .pagination > .disabled > span:hover,
 .pagination > .disabled > span:focus,
 .pagination > .disabled > a,
 .pagination > .disabled > a:hover,
 .pagination > .disabled > a:focus {
 color: #999;
 cursor: not-allowed;
 background-color: #fff;
 border-color: #ddd;
 }
</style>
			<!-- End Container fluid  -->
            <?php $__env->stopSection(); ?>
			
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>