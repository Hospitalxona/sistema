<!-- AQUI SOLO SE COLOCA LAS ESTIQUETAS CORRESPONDIENTES A LAS TABLAS CON DATOS DE LA CONSULTA  -->	
<table class="table table-striped">
<thead>
<tr class="table-active">
<th scope="col"><i class="mdi mdi mdi-key"></i>Id</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nombre(s)</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Apellido Paterno</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Apellido Materno</th>
<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Edad/Sexo</th>

<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Curp</th>
<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Telefono</th>
<th scope="col"colspan="2" ><div align='center'><i class="mdi mdi mdi-apps"></i>Detalles</div></th>

</tr>
</thead>
<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CARCHIVO  -->
@foreach($res as $pobabi)
<tbody>
<tr>
<th class="table-active" scope="row">{{$pobabi->id_pob_abie}}</th>
<td>{{$pobabi->nom_paciente}}</td>
<td>{{$pobabi->ap_paciente}}</td>
<td>{{$pobabi->am_paciente}}</td>
<td>{{$pobabi->edad}} / {{$pobabi->sexo}}</td>
<td>{{$pobabi->curp}}</td>
<td>{{$pobabi->telefono}}</td>
	<td>
    <a href="{{URL::action('cpoblaciones_abiertas@detallespobabi',['id_pob_abie'=>$pobabi->id_pob_abie])}}">
    <i class="mdi mdi mdi-grease-pencil"></i>Detalles
    </a>    
    </td>
    <td>
    <a href="{{URL::action('cpoblaciones_abiertas@formaltacitapobab',['id_pob_abie'=>$pobabi->id_pob_abie])}}">
    <i class="mdi mdi mdi-grease-pencil"></i>Programar Cita
    </a>
    </td>  
</tr>
</tbody>
@endforeach
</table>