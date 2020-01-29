
    <body>
        
<?php if($res->isEmpty()): ?> 
    <h2 align='center' style="color: black;"> El id de expediente no existe prueba con otro </h2>   <br>
    
<?php else: ?>
<?php $__currentLoopData = $tre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>






    
        


                
    

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">

                 <form class="form-horizontal m-t-30" action = "guardar_nueva_cita_con_ex" method = "POST" >
                <?php echo e(csrf_field()); ?>


                    <div class="form-group">

        
        
                <font size=3 style="color: black;">Datos del paciente</font>

                <br>
                <br>
                <br>
                
                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del paciente:</label>

                <Input type="text" class="form-control" size="7" name="nom_paciente" id="" value="<?php echo e($r->nom_paciente); ?>" placeholder="Nombre(s)" readonly>

                <br>


                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido paterno del paciente:</label>

                <input type="text" class="form-control" size="7" name="ap_paciente" id="" value="<?php echo e($r->ap_paciente); ?>" placeholder="A. Paterno" readonly>

                <br>


                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido materno del paciente:</label>

                <input type="text" class="form-control" size="7" name="am_paciente" id="" value="<?php echo e($r->am_paciente); ?>" placeholder="A. Materno" readonly>



                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id expediente:</label>

                <input type="text" class="form-control" size="7" name="id_expediente" id="" value="<?php echo e($r->id_paciente); ?>" placeholder="A. Materno" readonly>
                        
                        <!--<label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id cita:</label>
                        <input type="text" class="form-control" name = 'id_cit' value="<?php echo e($idexs); ?>" readonly ='readonly'>

                        <br>-->
<br>
<br>
<br>
<br>
<font size=3 style="color: black;">Agendar cita</font>

<br>
<br>
                        <!--<label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id expediente:</label>
                        <input type="text" class="form-control" name = 'id_expediente' placeholder="Ej. 1" required hidden>
                        
                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del paciente:</label>
                        <input type="text" class="form-control" name = 'nom_paciente' placeholder="Ej. Eduardo" required hidden>

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido paterno del paciente:</label>
                        <input type="text" class="form-control" name = 'ap_paciente' placeholder="Ej. Estrada" required hidden>

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido materno del paciente:</label>
                        <input type="text" class="form-control" name = 'am_paciente' placeholder="Ej. Palma" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:</label>
                        <input type="text" class="form-control" name = "fecha" id="fecha" placeholder="Año-mes-día" readonly="readonly" required hidden>

                        

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hora:</label>
                        <input type="time" class="form-control" name="hora" required hidden>

                        <br>

                        

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area medica:</label>

                        <select class="form-control" id="inlineFormCustomSelect" name = 'area_med' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value = '<?php echo e($uni->nombre_area); ?>'><?php echo e($uni->nombre_area); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <!--<input type="text" class="form-control" name = 'area_med' placeholder="Ej. Psycologia" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Numero de consultorio:</label>


                        <select class="form-control" id="inlineFormCustomSelect" name = 'num_consul' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        <?php $__currentLoopData = $consultorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value = '<?php echo e($consul->num_consul); ?>'><?php echo e($consul->num_consul); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                        <!--<input type="text" class="form-control" name = 'num_consul' placeholder="Ej. 1" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor:</label>

                        <select class="form-control" id="inlineFormCustomSelect" name = 'doctor' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        <?php $__currentLoopData = $doctores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value = '<?php echo e($doc->nom_doc); ?>'><?php echo e($doc->nom_doc); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        
        
            <!--<input list="lista" name="doctor" type="text" placeholder="Elige un doctor" class="form-control">
            <datalist id="lista" style="width: 100%px;">
                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value = '<?php echo e($uni->nom_doc); ?>' label='<?php echo e($uni->nom_doc); ?>'><?php echo e($uni->nom_doc); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>-->
        
                        

                        <!--<br>

                        <input type="text" class="form-control" name = 'doctor' placeholder="Doctor" required hidden>-->

                        <br>


                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asistencia :</label>
                        <input type="text" class="form-control" name = 'asistencia' value="Indef" readonly="readonly" required hidden>

                        <br>

                        

                    

                    </div>                
                    
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
</div>



































            
    
  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


  </body>











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