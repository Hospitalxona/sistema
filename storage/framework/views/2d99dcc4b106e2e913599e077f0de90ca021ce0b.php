<?php $__env->startSection('css'); ?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>jQuery UI Datepicker - Default functionality</title>
  
    <link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="../resources/views/citas/style.css">
        
    <link rel="stylesheet" href="../resources/views/citas/estilos.css">

    <link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">





<!--------------- Implementacion de Bootstrap ----------->

  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  
  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-------------------------------------------------------->




    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

</head>






<?php $__env->stopSection(); ?>
<?php $__env->startSection('receta'); ?>





<body id="body1">
 

  <br><br>




    
<?php $__env->stopSection(); ?>









<?php $__env->startSection('contenido'); ?>



  <div class="panel panel-default">

    

    <div class="panel-heading">Citas generales con expedientes
    
    
    
    
      


          <!--<p style="margin-left: 33%; position: absolute; margin-top: 2%;">
          <input type="submit" id="mostrar" value="Crear una nueva cita" align="center" class="btn btn-success">
          </p>-->




        <center>

          <!--<img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="80" height="80">
          <br><br>-->

          <a href="altacitaconex3" class="btn btn-primary"> Crear una nueva cita
          </a>

        </center>




        <br>

        </div>


      <div class="panel panel-default">
       
        <div class='tabs'>
    
              <ul class="nav nav-tabs " id="tabexp" role="tablist">
                  <li class="active">
                  <a data-toggle="tab" href="#general" role="tab">General</a>
                  </li>

                  <!--Las del dia actual
                  <li class="nav-item">
                  <a data-toggle="tab" href="#deldia" role="tab"onclick="inactDataTables()">Las del día</a>
                  </li>
                  -->

              </ul>

        
                    
      
      <div class="tab-content"> 
        <div class="tab-pane fade active in" id="general">

        <div class="panel-body">

          <table id="users" class="table table-hover table-condensed">

            <thead>
              <tr>
                <th>Id_ci</th>
                <th>Id_ex</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Area_med</th>
                <th>No.con</th>
                <th>Doctor</th>
                <th>Asis</th>
                <th>Nom_pac</th>
                <th>Ap_pac</th>
                <th>Am_pac</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="non_searchable"></td>
              </tr>
            </tfoot>

          </table>


        </div>
      </div>
   


    



  <!-- Las del dia
    <div class="tab-pane fade" id="deldia">
          
              <div class="panel-body">

          <table id="dia" class="table table-hover table-condensed">

            <thead>
              <tr>
                <th>id_ci</th>
                <th>id_ex</th>
                <th>fecha</th>
                <th>hora</th>
                <th>area_med</th>
                <th>num_con</th>
                <th>doctor</th>
                <th>asis</th>
                <th>paciente</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="non_searchable"></td>
              </tr>
            </tfoot>

          </table>


        </div>


      </div>
    </div>
</div>
      -->
    


      <br><br>

      <!--<div style="height: 200%;">-->
        
      <?php

        if (isset($_POST['Consultardef'])) {
          include("abrir_conexion.php");
        
          //$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");

          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE LEFT(fecha,10)=CURDATE();");

          while($consulta = mysqli_fetch_array($resultados))
          {
            echo "
                
              <table class=\"table table-striped\">
                  
                <tr>
                  <th scope=\"col\"> Id Cita <td>
                  <th scope=\"col\"> Id Expediente <td>
                  <th scope=\"col\"> Nombre Paciente <td>
                  <th scope=\"col\"> Apellido Pat. Paciente<td>
                  <th scope=\"col\"> Apellido Mat. Paciente <td>
                  <th scope=\"col\"> Fecha <td>
                  <th scope=\"col\"> Hora <td>
                  <th scope=\"col\"> Area Medica <td>
                  <th scope=\"col\"> Doctor <td>
                  <th scope=\"col\"> Num. Consul <td>
                  <th scope=\"col\"> Asistencia <td>
                  <th scope=\"col\"> Opciones <td>
                </tr>
                  
                <tr>
                  <td>".$consulta['id_cit']."</td>
                  <td></td>
                  <td>".$consulta['id_expediente']."</td>
                  <td></td>
                  <td>".$consulta['nom_paciente']."</td>
                  <td></td>
                  <td>".$consulta['ap_paciente']."</td>
                  <td></td>
                  <td>".$consulta['am_paciente']."</td>
                  <td></td>
                  <td>".$consulta['fecha']."</td>
                  <td></td>
                  <td>".$consulta['hora']."</td>
                  <td></td>
                  <td>".$consulta['area_med']."</td>
                  <td></td>
                  <td>".$consulta['doctor']."</td>
                  <td></td>
                  <td>".$consulta['num_consul']."</td>
                  <td></td>
                  <td>".$consulta['asistencia']."</td>
                  <td></td>
                  <td> // </td>
                  <td></td>      
                </tr>
                  
              </table>

                ";


          
            echo "<br>";
            }
            include("cerrar_conexion.php");
            }



            ?>






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















<script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
        <script>
           $(document).ready(function(){
         
               $('#users').DataTable({
          
                    serverSide: true,
                     processing: true,
                     bAutoWidth: false,
                    
          ajax: {
                url: '<?php echo route('datatable.citasdef3'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
          
        
                    "columns": [

            
      {data: 'id_cit', name: 'citas.id_cit'},
      {data: 'id_expediente', name: 'citas.id_expediente'},
      {data: 'fecha', name: 'citas.fecha'},
      {data: 'hora', name: 'citas.hora'},
      {data: 'area_med', name: 'citas.area_med'},
      {data: 'num_consul', name: 'citas.num_consul'},
      {data: 'doctor', name: 'citas.doctor'},
      {data: 'asistencia', name: 'citas.asistencia'},
      {data: 'nom_paciente', name: 'citas.nom_paciente'},
      {data: 'ap_paciente', name: 'citas.ap_paciente'},
      {data: 'am_paciente', name: 'citas.am_paciente'},
      {data: 'btn'},
                    
            
                        
                    ],        
          
          
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
          
          initComplete: function () {
            //Coloca los campos de busqueda en columna individual en el encabesado
             var r = $('#users tfoot tr');
             $('#users thead').append(r);
            ////////////////!!!!!!!!!!!!!!!!!!!!!///////////
              this.api().columns().every(function () {
                var column = this;
                 if (column.footer().className !== 'non_searchable') {
                var input = document.createElement("input");
                input.style.width = '85%';
                $(input).appendTo($(column.footer()).empty())
                .on('keyup', function () {
                  column.search($(this).val(), false, false, true).draw();
                });
                 }
              });
            },
          
                });
       });


        $.fn.dataTable.ext.errMode = 'throw';
        </script>

















<!--
  <script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>

  <script>
    $(document).ready(function() {
      $('#users').DataTable({
        "serverSide": true,
        processing: true,
        bAutoWidth: false,
        "ajax": "<?php echo e(url('api/conexpedientes')); ?>",
        "columns": [
          {data: 'id_cit'},
          {data: 'id_expediente'},
          {data: 'fecha'},
          {data: 'hora'},
          {data: 'area_med'},
          {data: 'num_consul'},
          {data: 'doctor'},
          {data: 'asistencia'},
          {data: 'nom_paciente'},
          {data: 'ap_paciente'},
          {data: 'am_paciente'},
          {data: 'btn'},
        ],

        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
          
        initComplete: function () {
          //Coloca los campos de busqueda en columna individual en el encabesado
          var r = $('#users tfoot tr');
          $('#users thead').append(r);
          ////////////////!!!!!!!!!!!!!!!!!!!!!///////////
          this.api().columns().every(function () {
          var column = this;
          if (column.footer().className !== 'non_searchable') {
                var input = document.createElement("input");
                input.style.width = '85%';
                $(input).appendTo($(column.footer()).empty())
                .on('keyup', function () {
                  column.search($(this).val(), false, false, true).draw();
                });
                 }
              });
            },



          });
        });

      </script>
-->



  <!--Las del dia actual
       <script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>

  <script>
    $(document).ready(function() {
      $('#dia').DataTable({
        "serverSide": true,
        processing: true,
        bAutoWidth: false,
        "ajax": "<?php echo e(url('api/conexpedientes_citas_del_dia_actual')); ?>",
        "columns": [
          {data: 'id_cit'},
          {data: 'id_expediente'},
          {data: 'fecha'},
          {data: 'hora'},
          {data: 'area_med'},
          {data: 'num_consul'},
          {data: 'doctor'},
          {data: 'asistencia'},
          {data: 'nom_paciente'},
          {data: 'btn'},
        ],

        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
          
        initComplete: function () {
          //Coloca los campos de busqueda en columna individual en el encabesado
          var r = $('#dia tfoot tr');
          $('#dia thead').append(r);
          ////////////////!!!!!!!!!!!!!!!!!!!!!///////////
          this.api().columns().every(function () {
          var column = this;
          if (column.footer().className !== 'non_searchable') {
                var input = document.createElement("input");
                input.style.width = '85%';
                $(input).appendTo($(column.footer()).empty())
                .on('keyup', function () {
                  column.search($(this).val(), false, false, true).draw();
                });
                 }
              });
            },



          });
        });

      </script>

  -->


      

<?php $__env->stopSection(); ?>




</body>
</html>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>