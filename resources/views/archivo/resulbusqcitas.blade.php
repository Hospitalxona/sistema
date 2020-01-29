@extends('layout.master')
@section('estilos')

<script src="{{ asset('js/jquery-3.3.1.js') }}"></script> 

<script>

	// creamos un variable que hace referencia al select
	var select=document.getElementById("elementos");

	// obtenemos el valor a buscar
	var buscar=document.getElementById("buscar").value;

	// recorremos todos los valores del select
	for(var i=1;i<select.length;i++)
	{
		if(select.options[i].text==buscar)
		{
			// seleccionamos el valor que coincide
			select.selectedIndex=i;
		}
	}
<!-- SE USA LA FUNCION KEYUP PARA REALIZAR LA BUSQUEDA CUANDO SE TECLEA UN DATO  -->
	$(document).ready(function(){				
					$("#busqueda").keyup(function(){
							var dato1= $("#busqueda").val();
							
							
							<!--  #RESULTADO ES LA SECCION DONDE SE MOSTRARAN LOS DATOS PROBENIENTES DEL CONTROLADOR CARCHIVO Y LA VISTA BUSQUEDAEXPEDIENTES -->
							<!-- BUSQUEDAARC ES LA RUTA DONDE SE MANDAN LOS DATOS, DATOS SE LE ASIGNA EL VALOR OBTENIDO DE LA VARIABLE DATO1 PROVENIENTE DE LA CAJA DE TEXTO BUSQUEDA-->
							$("#resultado").load('busquedaArc?datos='+dato1);
							
							
						});
					
                });
<!-- AQUI TERMINA EL APARTADO DE ESTILOS  -->
</script>

@stop
@section('contenido')
<table class="table table-striped">
<thead>
<tr class="table-active">
<th scope="col"><i class="mdi mdi mdi-key"></i>N° Cita</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Num Exp.</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nom. Paciente</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Fecha</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Horario</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Area Medica</th>
<th scope="col"><i class="mdi mdi mdi-apps"></i>Asistio?</th>
</tr>
</thead>
<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CITAS  -->
@foreach($resul as $res)
<tbody>
<tr>
<th class="table-active" scope="row">{{$res->id_cit}}</th>
<td>{{$res->id_expediente}}</td>
<td>{{$res->nom_paciente}}</td>
<td>{{$res->fecha}}</td>
<td>{{$res->hora}}</td>
<td>{{$res->area_med}}</td>
<td>
	<input type="radio" name="Si">Si
</td>
</tbody>
@endforeach
</table>
@stop