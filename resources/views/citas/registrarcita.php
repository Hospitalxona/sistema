<?php

if (isset($_POST['id_expediente']) && !empty($_POST['id_expediente']) && isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['hora']) && !empty($_POST['hora']) && isset($_POST['area_med']) && !empty($_POST['area_med']) && isset($_POST['num_consul']) && !empty($_POST['num_consul']) && isset($_POST['doctor']) && !empty($_POST['doctor']) && isset($_POST['asistencia']) && !empty($_POST['asistencia']) && isset($_POST['nom_paciente']) && !empty($_POST['nom_paciente']) && isset($_POST['ap_paciente']) && !empty($_POST['ap_paciente']) && isset($_POST['am_paciente']) && !empty($_POST['am_paciente']))
{
 $conex = mysqli_connect("localhost","root",""); 
 mysqli_select_db($conex,"hospitalxonacatlan");
 mysqli_query($conex,"INSERT INTO citas (id_expediente,fecha,hora,area_med,num_consul,doctor,asistencia,nom_paciente,ap_paciente,am_paciente) VALUES('$_POST[id_expediente]','$_POST[fecha]','$_POST[hora]','$_POST[area_med]','$_POST[num_consul]','$_POST[doctor]','$_POST[asistencia]','$_POST[nom_paciente]','$_POST[ap_paciente]','$_POST[am_paciente]')");
 echo "Datos insertados";
}
else
{
 echo "Problemas al insertar datos";
}

?>