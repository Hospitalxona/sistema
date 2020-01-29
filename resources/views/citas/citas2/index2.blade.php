<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  
  <link rel="stylesheet" href="style.css">


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>





<script type="text/javascript" src="jquery-3.3.1.js"></script>


<script type="text/javascript">

    $(document).ready(function(){

      $('#mostrar').click(function(){
        $('#contenedor, #contenedorForm').fadeIn(1000);
      })

      $('#contenedor').click(function(){
        $('#contenedor, #contenedorForm').fadeOut(1000);
      })
    })

  </script>

  <style type="text/css">
    
    body{
      /*background: url('fondo.jpg');*/
      background-size: 100% 1000px;
    }
    
    #contenedor{
      background: rgba(0,0,0,0.5);
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      height: 200%;
      display: none;
    }

    #contenedorForm{
      text-align: center;
      position: absolute;
      left: 50%;
      top: 40%;
      padding: 20px;
      border-radius: 10px;
      display: none;
    }

  </style>







<link rel="stylesheet" href="estilos.css">





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






<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<script>
$(function () {
$("#fecha2").datepicker();
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
$("#fecha2").datepicker();
});




</script>

































</head>
<body>
 
















 <form method="POST" action="index2.blade.php">
      <div style="margin-left: 9%; margin-top: 21px; position: absolute; color: black">
      
        <br><br>

        <p>Fecha: <input type="datatime" name="doc" value="<?php echo date("d/m/Y");?>" id="fecha" readonly="readonly">
  
        <input type="submit" value="Consultar" name="btn2" class="btn btn-info">

        <!--<input type="submit" value="Consultar" name="Consultardef" class="btn btn-info">-->

        </p>
      </div>

      <div style="margin-left: 64%; position: absolute; color: black; margin-top: 61px">
        <p> 
          Busqueda general:<input type="text" name="caja_2" id="caja_2" placeholder="ej. Eduardo">
          <input type="submit" value="Consultar" name="btn3" class="btn btn-info">
        </p>
      </div>


      



    </form>
    
<br><br>  
<p align="center">
<input type="submit" id="mostrar" value="Crear una nueva cita" align="center" class="btn btn-success">
</p>
  <div id="contenedor">
    
  </div>

  <div id="contenedorForm">

    <div class="loginBox">
      <h2>Crea una cita</h2>


    <form method="POST" action="registrarcita.php">

        <div>
        
        
        <p>Nombre Paciente</p>
        <input type="text" name="nom_paciente" placeholder="Nombre paciente">


        <p>Apellido Paterno Paciente</p>
        <input type="text" name="ap_paciente" placeholder="Apellido Paterno Paciente">


        <p>Apellido Materno Paciente</p>
        <input type="text" name="am_paciente" placeholder="Apellido Materno Paciente">
                

            
        <p>Fecha: <input type="datatime" name="fecha" id="fecha2" readonly="readonly" placeholder="año-mes-día" style="background:rgb(1,176,254); color:#FFFFFF; border-width: 1px;"></p>

            
        <p>Hora</p>
        <input type="time" name="hora" style="background:rgb(1,176,254); color:#FFFFFF; border-width: 1px;">


        <p>Area medica</p>
        <input type="text" name="area_med" placeholder="area medica">


        <p>Numero de consultorio</p>
        <input type="text" name="num_consul" placeholder="Numero de consultorio">


        <p>Doctor</p>
        <input type="text" name="doctor" placeholder="Doctor">

        


        <p>Asistencia</p>
        <div class="caja">
        <select name="asistencia">
          <option value="Indefinido">Indefinido</option>
          <option value="Si">Si</option>
          <option value="No">No</option>
        </select>
        </div>


        <br><br><br>

            
            

        <input type="submit" name="Nuevacita" value="Registrar cita">

            

        </div>

    </form>

    
  </div>

</div>



    













    
        
        <br><br>
        



    <?php

      if (isset($_POST['Consultardef2'])) {
        include("abrir_conexion.php");
        
        //$resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");

        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE LEFT(fecha,10)=CURDATE();");

        while($consulta = mysqli_fetch_array($resultados))
        {
          echo "
                
                  <table class=\"table table-striped\">
                  
                    <tr>
                      <th scope=\"col\"> Id Cita Población Abierta<td>
                      <th scope=\"col\"> Nombre Paciente <td>
                      <th scope=\"col\"> Apellido Pat. Paciente <td>
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
                      <td>".$consulta['id_citapobabi']."</td>
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
        include("cerrar_conexion2.php");
      }







      if (isset($_POST['btn2'])) {
        include("abrir_conexion.php");

        $doc = $_POST['doc'];

        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE fecha LIKE '%$doc%'");
        
        while($consulta = mysqli_fetch_array($resultados))
        {
          echo "

            <table class=\"table table-striped\">
              <tr>
                <td><b><center>Id Cita Población Abierta</center></b></td>
                <td><b><center>Nombre Paciente</center></b></td>
                <td><b><center>Apellido Pat. Paciente</center></b></td>
                <td><b><center>Apellido Mat. Paciente</b></td>
                <td><b><center>Fecha</center></b></td>
                <td><b><center>Hora</center></b></td>
                <td><b><center>Area medica</center></b></td>
                <td><b><center>Doctor</center></b></td>
                <td><b><center>Num.Consul</center></b></td>
                <td><b><center>Asistencia</center></b></td>
                <td><b><center>Opciones</center></b></td>
              </tr>
              <tr>
                <td><center>".$consulta['id_citapobabi']."</center></td>
                <td><center>".$consulta['nom_paciente']."</center></td>
                <td><center>".$consulta['ap_paciente']."</center></td>
                <td><center>".$consulta['am_paciente']."</center></td>
                <td><center>".$consulta['fecha']."</center></td>
                <td><center>".$consulta['hora']."</center></td>
                <td><center>".$consulta['area_med']."</center></td>
                <td><center>".$consulta['doctor']."</center></td>
                <td><center>".$consulta['num_consul']."</center></td>
                <td><center>".$consulta['asistencia']."</center></td>
                <td><center>//</center></td>
              </tr>
            </table>


          ";
          
        }
        
        include("cerrar_conexion.php");
        

      
      }




    if (isset($_POST['btn3'])) {
        include("abrir_conexion.php");

        $doc = $_POST['caja_2'];

        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE id_citapobabi LIKE '%$doc%' or fecha like '%$doc%' or hora like '%$doc%' or area_med like '%$doc%' or num_consul like '%$doc%' or doctor like '%$doc%' or asistencia like '%$doc%' or nom_paciente like '%$doc%' or ap_paciente like '%$doc%' or am_paciente like '%$doc%'");
        
        while($consulta = mysqli_fetch_array($resultados))
        {
          echo "

            <table class=\"table table-striped\">
              <tr>
                <td><b><center>Id Cita Población Abierta</center></b></td>
                <td><b><center>Nombre Paciente</center></b></td>
                <td><b><center>Apellido Pat. Paciente</center></b></td>
                <td><b><center>Apellido Mat. Paciente</b></td>
                <td><b><center>Fecha</center></b></td>
                <td><b><center>Hora</center></b></td>
                <td><b><center>Area medica</center></b></td>
                <td><b><center>Doctor</center></b></td>
                <td><b><center>Num.Consul</center></b></td>
                <td><b><center>Asistencia</center></b></td>
                <td><b><center>Opciones</center></b></td>
              </tr>
              <tr>
                <td><center>".$consulta['id_citapobabi']."</center></td>
                <td><center>".$consulta['nom_paciente']."</center></td>
                <td><center>".$consulta['ap_paciente']."</center></td>
                <td><center>".$consulta['am_paciente']."</center></td>
                <td><center>".$consulta['fecha']."</center></td>
                <td><center>".$consulta['hora']."</center></td>
                <td><center>".$consulta['area_med']."</center></td>
                <td><center>".$consulta['doctor']."</center></td>
                <td><center>".$consulta['num_consul']."</center></td>
                <td><center>".$consulta['asistencia']."</center></td>
                <td><center>//</center></td>
              </tr>
            </table>


          ";
          
        }
        
        include("cerrar_conexion.php");
        

      
      }


      

    ?>






  </div>
</div>





































 
 



























































































</body>
</html>