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








    <!-- Script del Modal (venteana emergente) -->


<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" /> 
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>" defer>
</script>

<script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>


        <script>
           $(document).ready(function(){
         
               $('#tablaAjax').DataTable({
          
                    serverSide: true,
                     processing: true,
                     bAutoWidth: false,
                    
          ajax: {
                url: '<?php echo route('datatable.modcitasclickder4'); ?>',
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
      /*{data: 'doctor', name: 'citas.doctor'},*/
      {data: 'asistencia', name: 'citas.asistencia'},
      {data: 'nom_paciente', name: 'citas.nom_paciente'},
      {data: 'ap_paciente', name: 'citas.ap_paciente'},
      {data: 'am_paciente', name: 'citas.am_paciente'},
      {data: 'btn'},
                    
            
                        
                    ],        
          
          
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
          
          initComplete: function () {
            //Coloca los campos de busqueda en columna individual en el encabesado
             var r = $('#tablaAjax tfoot tr');
             $('#tablaAjax thead').append(r);
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




<script>

$(document).ready(function () {
    var table = $('#tablaAjax').DataTable();//Guarda en variable datatable

    /* Color rojo cuando la existencia en 0 */
    /*$("#tablaAjax tbody").on("mouseenter", "tr", function () {
        $('#tablaAjax tbody').on('mouseenter', 'tr', function () {
            existe = $(this).find(".existencia").text();
            existe = Number(existe);
            if (existe == 0)
                $(this).css("background-color", "rgb(220, 53, 69, 0.3)");

        });
        $('#tablaAjax tbody').on("mouseleave", "tr", function () {
            $(this).removeAttr("style");
        });
    });*/

    $("#tablaAjax tbody").on("mouseleave", "tr", function () {
        $(this).removeAttr("style");
    });

    $('#p_headerMedicamento,#p_footerMedicamento').on('click', 'button', function () {
        table.ajax.reload();
        table.search("").columns().search("").draw();
        $('#myModal').hide();
    });
    $('#p_footerAlert,#p_headerAlert').on('click', 'button', function () {
        $('#myModalAlert').hide();
    });
});

function muestraModal(cajaId, IdCit) {
    /*Funcion muestraModal(): Se ejecuta cuando se da click en el input y tiene un dato de entrada que es 1,2,3 dependiendo el input que seleccione*/
    $('#myModal').show();//Muestra la ventana
    $('#tablaAjax').attr("data-caja", cajaId); //Coloca atributo data-caja dependiendo el input
}

</script>



<!------Fin del script modal(ventana emergente)---------->



</head>






<?php $__env->stopSection(); ?>
<?php $__env->startSection('receta'); ?>





<body id="body1">
 

  <br><br>




    
<?php $__env->stopSection(); ?>









<?php $__env->startSection('contenido'); ?>



  <div class="panel panel-default">

    <?php 
      $mensaje = Session::get('sesionname');
     ?>

    <div class="panel-heading">Citas con expedientes del doctor 
    
    
    <?php 
      echo $mensaje;  
     ?>
    
      


          <!--<p style="margin-left: 33%; position: absolute; margin-top: 2%;">
          <input type="submit" id="mostrar" value="Crear una nueva cita" align="center" class="btn btn-success">
          </p>-->




        <center>

          <!--<img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="80" height="80">
          <br><br>-->

          <a href="altacitaconex" class="btn btn-primary"> Crear una nueva cita 
          </a>

          

        </center>


    


    <!--------------------- Modal --------------------->
 <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: 800px;left: -42px;">
                <div class="modal-header" id="p_headerMedicamento">
                    <button type="button" class="close" data-dismiss="modal" onclick="history.go(0)">x</button>

                    <h2 class="modal-title">Modificar  Asistencia de esta Cita</h2>

                    
                    <!-- aqui va el numero-->
                    <!--<?php echo e(Session::get('sesionid')); ?>-->

                    <!-- Prueba 1-->
                    <!--
                    <script type="text/javascript">
                    var miVar = 123; 
                    document.write(miVar); 
                    </script>-->
                    <!-- fin de Prueba 1 -->

<br>




<h4 style="color: black;">Id de la cita</h4>

<!-- Prueba 2-->
<!--<p id="content2">

</p>-->
<!-- Fin de Prueba 2 -->



<!-- Prueba 3 -->
<!--<div id="content3">
  

</div>-->
<!-- Fin de Prueba 3 -->


<!-- Prueba 4 -->
  
  <!--<input type='text' id='txtTabla' name='txtTabla' value='' readonly="readonly">-->
  
<!-- Fin de Prueba 4 -->



<!-- Ultima prueba llevar el id a la caja de texto -->
  
  <input type='text' id='buscar' name='id_cit' value='' readonly="readonly">
  
<!-- Fin de la ultima prueba -->
  





                    
                </div>
                <div class="modal-body">
                    <!-- Aqui va el formulario del modal -->



<!--
<h4 style="color: black;">Ingresa id de expediente</h4>

    <input type="text" class="form-control" id="buscar" placeholder="Buscar">   

<br>
<br>
-->


<div id="resultado">
    
        


</div>








<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
     

<script>

<!-- SE USA LA FUNCION KEYUP PARA REALIZAR LA BUSQUEDA CUANDO SE TECLEA UN DATO  -->

    $(document).ready(function(){  

        <!-- #BUSQUEDA ES EL NOMBRE DE LA CAJA DE TEXTO  -->

        $("#buscar").keyup(function(){
            var dato1= $("#buscar").val();

            <!--  #RESULTADO ES LA SECCION DONDE SE MOSTRARAN LOS DATOS PROBENIENTES DEL CONTROLADOR CARCHIVO Y LA VISTA BUSQUEDAEXPEDIENTES -->

            <!-- BUSQUEDAARC ES LA RUTA DONDE SE MANDAN LOS DATOS, DATOS SE LE ASIGNA EL VALOR OBTENIDO DE LA VARIABLE DATO1 PROVENIENTE DE LA CAJA DE TEXTO BUSQUEDA-->

            $("#resultado").load('resultbusquedaidexmodal?datos='+dato1).val();
                            //alert(dato1);
           });
   });

</script>





                </div>

      <!-- Aqui termina el formulario del modal -->




















                
      <!-- Footer del Modal(ventana emergente)

                <label for="comentario">¿Que presentacion no se encontro?</label> &nbsp; &nbsp;
                <input type="text" style="width: 50%;height: 5%;" name="newmedicamento" placeholder="Ingrese medicamento." id="newmedicamento" onkeydown="javascript:tecla(event);">
                <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="tecla(1)">Agregar</button>
                <div class="modal-footer" id="p_footerMedicamento">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
      -->
            </div>
        </div>

</div>
    
    
<!--------------------- Fin del Modal --------------------->









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
                url: '<?php echo route('datatable.citasdef'); ?>',
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


















<!-- Prueba 4 -->
  <!--<script>
    window.onload = function(){
    document.getElementById('txtTabla').value = 'Tutorial Javascript';
    };
  </script>-->
<!-- Fin de la Prueba 4-->


<script type="text/javascript">
        $(document).ready(function(){
            window.oncontextmenu = function() {return false;}/*desabilita el menu tradicional */
                $("#users tbody").on("mousedown","tr", function (e) {
                    var IdCit=$(this).find("td.sorting_1").html();
                    IdCit=Number(IdCit);

            
                    /* Prueba 2 */
                    /*var miVar = 1234;
    document.getElementById("content2").innerHTML = miVar;*/
                    /* Fin de Prueba 2*/

                    /* Prueba 3 */
                    
    /*document.getElementById("content3").innerHTML = IdCit; /*
                    /* Fin de Prueba 3*/



                    /* Ultima Prueba llevar el id a la caja de texto */

    document.getElementById('buscar').value = IdCit;
    

                    /* Fin de la ultima prueba */





                    if (e.button == 2){/*Si Presiona el clic derecho es 2 y ejecuta acciones*/
                        $("#menu").css("top", e.pageY - 20);/*Agrega top dependiendo de donde se encuentre el cursor */
                        $("#menu").css("left", e.pageX - 20);/*Agrega left dependiendo de donde se encuentre el cursor */
                        $("#menu").show('fast');/*Muestra la lista con un efecto fast */  

            $("#p_li").append().html("<a href='http://localhost/sistema/public/altacitaceclickder4/"+IdCit+"' style='color:#000000;'>Crear cita para este paciente</a> "); 



            $("#p_li2").append().html("<a href='#/"+IdCit+"' style='color:#000;' onclick='muestraModal(2)'>Modificar asistencia de esta cita</a> ");

            /*$("#p_li3").append().html(+IdCit+" ");*/


            /*$("#p_li2").append().html("<a href='#/"+IdCit+"' style='color:#000;' onclick='muestraModal(2)'>Modificar asistencia de esta cita</a> ");/*


            /*$("#p_li2").append().html("<a href='http://localhost/sistema/public/asigasistenciacitaceclickder4/"+IdCit+"' style='color:#000;'>Modificar asistencia de esta cita</a> ");*/  


/*
            $("#p_li3").append().html("<a href='http://localhost/sistema/public/modifi/"+numExpediente+"' style='color:#000;'>Editar Datos</a> ");  

            $("#p_li4").append().html("<a href='http://localhost/sistema/public/prestamo/"+numExpediente+"' style='color:#000;'>Prestamo del Expediente</a> "); 
  */          
                    }
                    if (e.button == 0){/*Si Presiona el clic izquierdo es 0 y oculta la lista */
                        $("#menu").hide();      
                    }
                });
        });


    


    </script>
<!-- /*Crea un elemnto de lista y coloca en la posicion donde se encuentra el cursor*/ -->
    <ul id="menu" class="dropdown-menu" role="menu"  style="border: 1px solid rgba(0, 144, 209, 0.5);color:#000000;">            
            <li style="color:#000000" id="p_li">
      <li style="color:#000000" id="p_li2">
      <li style="color:#000000" id="p_li3">
      <li style="color:#000000" id="p_li4">
            </li>
    </ul>







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