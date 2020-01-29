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
                                    <h1>Alta Cita con Expediente</h1>
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


<form class="form-horizontal m-t-30" action="<?php echo e(route('guardacitaconceclickder4')); ?>" method = "POST" >



<?php echo e(csrf_field()); ?>


<div class="form-group">

<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<font size=3 style="color: black;">Datos del paciente</font>

                <br>
                <br>
                <br>

<table>

<tr>
    
    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Nombre del paciente:
        </label>

        <Input type="text" class="form-control" name="nom_paciente" id="" value="<?php echo e($r->nom_paciente); ?>" placeholder="Nombre(s)" readonly="readonly">
    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Apellido paterno del paciente:
        </label>

        <input type="text" class="form-control" name="ap_paciente" id="" value="<?php echo e($r->ap_paciente); ?>" placeholder="A. Paterno" readonly="readonly">
    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Apellido materno del paciente:
        </label>
        
        <input type="text" class="form-control" name="am_paciente" id="" value="<?php echo e($r->am_paciente); ?>" placeholder="A. Materno" readonly="readonly">
    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Id expediente:
        </label>
        
        <input type="text" class="form-control" name="id_expediente" id="" value="<?php echo e($r->id_expediente); ?>" placeholder="A. Materno" readonly="readonly">
    </div>

    </td>



    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>
</tr>


<tr>
    <td colspan="2">

        <br>
        <br>
        <font size=3 style="color: black;">Agendar cita</font>

        <br>
        <br>

    </td>
</tr>


<tr>

    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Fecha:
        </label>
        
        <input type="text" class="form-control" name = "fecha" id="fecha" placeholder="Año-mes-día" readonly="readonly" required hidden>
    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Hora:
        </label>
        
        <input type="time" class="form-control" name="hora" required hidden>
    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Area medica:
        </label>
        
        <select class="form-control" id="inlineFormCustomSelect" name = 'area_med' required hidden>
        
        <option disabled selected>Selecciona una opción</option>
        
        <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value = '<?php echo e($uni->nombre_area); ?>'><?php echo e($uni->nombre_area); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </select>

    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Numero de consultorio:
        </label>
        
        <select class="form-control" id="inlineFormCustomSelect" name = 'num_consul' required hidden>
        
        <option disabled selected>Selecciona una opción</option>
        
        <?php $__currentLoopData = $consultorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value = '<?php echo e($consul->num_consul); ?>'><?php echo e($consul->num_consul); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </select>

    </div>

    </td>



    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>

</tr>


<tr>
    
    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>

    
    <td>

    <div class="form-group">
        <label>
            Doctor:
        </label>
        
        <select class="form-control" id="inlineFormCustomSelect" name = 'doctor' required hidden>
        
        <option disabled selected>Selecciona una opción</option>

        <?php $__currentLoopData = $doctores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value = '<?php echo e($doc->nom_doc); ?>'><?php echo e($doc->nom_doc); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

    </div>

    </td>


    <td>
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </td>


    <td>

    <div class="form-group">
        <label>
            Asistencia:
        </label>
        
        <input type="text" class="form-control" name = 'asistencia' value="Indef" readonly="readonly" required hidden>

    </div>

    </td>

</tr>


    



</table>




<center>

    <div class="col-sm-12">

        <input type="submit" class="btn btn-success" value="Guardar">
    
        <input value="Limpiar" onclick="history.go(0)" type="button" class="btn btn-warning">
    
    </div>

</center>


</form>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>



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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>