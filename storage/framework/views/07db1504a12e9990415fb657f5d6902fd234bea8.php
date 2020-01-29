<?php $__env->startSection('contenido'); ?>
<!-- =========

===================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <h4 class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </h4>
                                    <h4 class="breadcrumb-item">
                                        <a href="<?php echo e('conexpedientes'); ?>">Regresar</a>
                                    </h4>

                                    <center>
                                    <h1>Modificar Cita con Expediente</h1>
                                    </center>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


<div class="container-fluid">
  <div class="row">
   <div class="col-12">

  <div class="card card-body">

<form action = "<?php echo e(route('guardar_modificacion_cita_con_expediente')); ?>" method = "POST">
     <?php echo e(csrf_field()); ?>

<?php $__currentLoopData = $fa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="form-group"hidden>

    <input  type="text" class="form-control" name = 'id_cit' id = 'id_cit' value="<?php echo e($f->id_cit); ?>">

</div>



<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id expediente: </label>

    <input type="text" class="form-control" name = 'id_expediente' id = 'id_expediente'value="<?php echo e($f->id_expediente); ?>">
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha: </label>

    <input type="text" class="form-control" name = 'fecha' id = 'fecha' value="<?php echo e($f->fecha); ?>" readonly="readonly">
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hora: </label>

    <input type="time" class="form-control" name = 'hora' id = 'hora' value="<?php echo e($f->hora); ?>" >
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area medica: </label>

    <input type="text" class="form-control" name = 'area_med' id = 'area_med' value="<?php echo e($f->area_med); ?>" >
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Numero de consultorio: </label>

    <input type="text" class="form-control" name = 'num_consul' id = 'num_consul' value="<?php echo e($f->num_consul); ?>" >
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor: </label>

    <input type="text" class="form-control" name = 'doctor' id = 'doctor' value="<?php echo e($f->doctor); ?>" >
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asistencia: </label>

    <input type="text" class="form-control" name = 'asistencia'  id = 'asistencia' value="<?php echo e($f->asistencia); ?>" >
</div>


<div class="form-group">
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del paciente: </label>

    <input type="text" class="form-control" name = 'nom_paciente'  id = 'nom_paciente' value="<?php echo e($f->nom_paciente); ?>" >
</div>











            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                                      
<center>      

     <div class="col-sm-12">

        <input type  ='submit' class="btn btn-success" value = 'Guardar'>

        <input type  ='reset' class="btn btn-warning" value = 'Limpiar'>

    </div>

</center>


</form>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>







 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>










<script>
    $(function () {
    $("#fecha").datepicker();
    });
  </script>





  <script>
   $.datepicker.regional['es'] = {
   closeText: 'Cerrar',
   prevText: '< Ant',
   nextText: 'Sig >',
   currentText: 'Hoy',
   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
   weekHeader: 'Sm',
   dateFormat: 'yy-mm-dd',
   firstDay: 1,
   isRTL: false,
   showMonthAfterYear: false,
   yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);
  $(function () {
  $("#fecha").datepicker();
  });



  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>