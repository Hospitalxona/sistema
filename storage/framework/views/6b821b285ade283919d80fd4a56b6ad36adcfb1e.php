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
                        <h4 class="page-title">Alta Expediente</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes Digitales </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                
               <center>
                <h2>Alta Expediente</h2>
            
              <center>

                </div>
            </div>


<div class="container-fluid">
  <div class="row">
   <div class="col-12">

  <div class="card card-body">
 <form action = "<?php echo e(route('guardamodifi')); ?>" method = "POST">
     <?php echo e(csrf_field()); ?>

     <div class="form-group">
<label>Id Expediente :</label>
<input type="text" class="form-control" name = 'id_expediente' value="<?php echo e($idexs); ?>" id = 'id_expediente' readonly ='readonly'>

</div>

 <div class="form-group">
<label>Id Paciente :</label>
<input type="text" class="form-control" name = 'id_paciente' id = 'id_paciente'>

</div>

<!--<div class="form-group"hidden>

<input  type="text" class="form-control" name = 'id_expediente' id = 'id_expediente'>

</div>-->


</div>
<div class="form-group">
<label>Nombre Paciente :</label>
<input type="text" class="form-control" name = 'nom_paciente' id = 'nom_paciente'>
</div>

<div class="form-group">
<label>Apellido Paterno :</label>
<input type="text" class="form-control" name = 'ap_paciente' id = 'ap_paciente'>
</div>
<div class="form-group">
<label>Apellido Materno :</label>
<input type="text" class="form-control" name = 'am_paciente' id = 'am_paciente' >
</div>
<div class="form-group">
<label>Edad :</label>
<input type="text" class="form-control" name = 'edad' id = 'edad'  >
</div>
<div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" id="sexo" class="custom-control-input" VALUE='M'
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" id="sexo" class="custom-control-input" VALUE='F' 
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
                                </div>  


<div class="form-group">
<label>Curp :</label>
<input type="text" class="form-control" name = 'curp' id = 'curp' >
</div>
<div class="form-group">
<label>Parentesco :</label>
<input type="text" class="form-control" name = 'parentesco'  id = 'parentesco'" >
</div>

<div class="form-group">
<label>Numero Afiliacion :</label>
<input type="text" class="form-control" name = 'num_afiliacion'  id = 'num_afiliacion'>
</div>



<div class="form-group">
<label>Ubicacion:</label>
    <select type="text" class="form-control" name = 'ubicacion' id = 'ubicacion' >
        <option value="Archivo">Archivo</option>
        <option value="Sistemas">Sistemas</option>
        <option value="Urgencias">Urgencias</option>
        <option value="Quirofano">Quirofano</option>
        <option value="Triage">Triage</option>
        <option value="Ginecologia">Ginecologia</option>
        <option value="Pediatria">Pediatria</option>
        <option value="Anestesiologia">Anestesiologia</option>
        <option value="Cirugia">Cirugia</option>
        <option value="Nutricion">Nutricion</option>
        <option value="Gobierno">Gobierno</option>
        <option value="Psicologia Clinica">Psicologia Clinica</option>
        
    </select>

</div>


<div class="form-group">
<label>Fecha Nacimiento:</label>
<input type="date" class="form-control" name = 'fecha_nacimiento' id = 'ubicacion'>
</div>
<div class="form-group">
<label>Afiliacion Seguro:</label>
<input type="text" class="form-control" name = 'afiliacion_seguro' id = 'ubicacion' >
</div>
<div class="form-group">
<label>Localidad:</label>
<input type="text" class="form-control" name = 'localidad' id = 'localidad' >
</div>
<div class="form-group">
<label>Codigo Postal:</label>
<input type="text" class="form-control" name = 'cp' id = 'ubicacion' >
</div>
<!--
<div class="form-group">
<label>Telefono:</label>
<input type="text" class="form-control" name = 'telefono' id = 'ubicacion' v >
</div>
-->                                 
                                      
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>


</form>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>