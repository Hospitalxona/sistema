	@extends('layout.master')
	@section('js')

	<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
	<script src="{{ asset('js/jquery-3.3.1.js') }}"></script> 


	<script>
	$(document).ready(function(){

		$("#historico_movimientos").hide();
		$("#historico_citas_ind").hide();
		$("#familiares").hide();
		
			$("#historial").click(function(){
				$('#historico_movimientos').show();
				$("#historico_citas_ind").hide();
				$("#familiares").hide();
				
			});		
			$("#historial").dblclick(function(){
				$('#historico_movimientos').hide();		
			});
			
			$("#histcitas").click(function(){
				$('#historico_movimientos').hide();
				$("#familiares").hide();
				$("#historico_citas_ind").show();			
			});		
			$("#histcitas").dblclick(function(){
				$('#historico_citas_ind').hide();		
			});
			
			$("#famili").click(function(){
				$('#familiares').show();
				$("#historico_movimientos").hide();
				$("#historico_citas_ind").hide();
				
			});		
			$("#famili").dblclick(function(){
				$('#familiares').hide();		
			});
					
		});			
	</script>
	@stop

	@section('contenido')
	<!-- ============================================================== -->
				<!-- Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				<div class="page-breadcrumb">
					<div class="row">
						<div class="col-5 align-self-center">
							<h4 class="page-title">Expediente Paciente</h4>
						</div>
						<div class="col-7 align-self-center">
							<div class="d-flex align-items-center justify-content-end">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="{{ '../inicio' }}">Inicio</a>
										</li>
										<li class="breadcrumb-item">
											<a href="{{ '../expedientes' }}">Expedientes</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Revisar</li>
									</ol>
								</nav>
						</div>
					</div>
				</div>
				<!-- ============================================================== -->
				<!-- End Bread crumb and right sidebar toggle -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Container fluid  -->
				<!-- ============================================================== -->
	<div class="row">

							
						
						
						<!-- /# column -->
			<div class="col-lg-4 col-xlg-3 col-md-5">
			{{ csrf_field() }}
							<div class="card">
								<div class="card-body">
										<h4 class="card-title m-t-10">{{$expedientes->id_expediente}}</h4>
										<input type='text' id='nid' value='{{$expedientes->id_expediente}}' name='nid'  hidden>
										<h6 class="card-subtitle">Id del Expediente</h6>
		
			<h4 class="card-title m-t-10"><a  @if(Session::get('sesiontipo')=="Archivo")
	href="{{URL::action('carchivo@prestamoexpediente',['id_expediente'=>$expedientes->id_expediente])}}"@endif>
	{{$expedientes->ubicacion}}</a></h4>

		
										<div class="form-group">
			<h5>Ubicación Actual </h5>
	</div>

								</div>
							</div>
							
				
								<div class="card-body">
								<strong><h4>Información afiliación</h4></strong>
							<h4 class="card-title m-t-10">{{$pacientes->num_afiliacion}}</h4>
										<h6 class="card-subtitle">Numero de Afilicacion</h6>
		<h4 class="card-title m-t-10">{{$unidades->clues}}</h4>
										<h6 class="card-subtitle">CLUES</h6>
			<h4 class="card-title m-t-10">{{$unidades->nom_unidad}}</h4>
										<h6 class="card-subtitle">Unidad Médica</h6>

							
							</div>
						</div>
										

	<!-- Column -->	
		<div class="col-lg-8 col-xlg-9 col-md-7">
							<div class="card">
								<div class="card-body">
									<form class="form-horizontal form-material">
										<div class="form-group">
										<center><label class="col-md-20">Información del Paciente</label></center>
											<label class="col-md-12">Nombre Completo: </label>
											<div class="col-md-12">
												<input type="text" value = '{{$pacientes->ap_paciente.' '.$pacientes->am_paciente.' '.$pacientes->nom_paciente}}' class="form-control form-control-line"readonly>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-12">CURP: </label>
											<div class="col-md-12">
												<input type="text" value = '{{$pacientes->curp}}' class="form-control form-control-line"readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12">Edad: </label>
											<div class="col-md-12">
												<input type="text" value = '{{$pacientes->edad}}' class="form-control form-control-line"readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12">Fecha de Nacimiento: (mm-dd-aaaa)</label>
											<div class="col-md-12">
												<input type="date" value = '{{$pacientes->fecha_nacimiento}}' class="form-control form-control-line"readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12">Sexo: </label>
											<div class="col-md-12">
												<input type="text" class="form-control form-control-line" 
												@if ($pacientes->sexo=='M') echo value = 'Masculino'; @endif
												@if ($pacientes->sexo=='F') echo value = 'Femenino'; @endif											
												readonly>
												
											</div>
										</div>
										</div>
									</form>
								</div>
							

						
						</div>        



							
							<table align="center" width="75%">
	@if(Session::get('sesiontipo')=="Archivo")
		@if($expedientes->trashed())

											<th>	<button class="btn label-info label-rounded" data-toggle="modal" data-target="#restaurar" >
												<img src="{{asset('laravel\img\document_add_256_icon-icons.com_75994.png')}}">Activar Registro
												
												</button></th>
												</a>
													@include('archivo.restaurar')									
													<br><br><br>
												@else
												
											
											<th><button class="btn label-danger label-rounded" data-toggle="modal" data-target="#create" >
												<img src="{{asset('laravel\img\document_delete_256_icon-icons.com_75995.png')}}">Desactivar Registro
												
												</button></th>
												</a>
													@include('archivo.create')
													<br><br><br>
												@endif
	@endif

												<div class='card'>
								<div class="card-body">
								<th>		<button id='histcitas' class='btn btn-success label-rounded'>
											<img src="{{asset('laravel\img\historial.png')}}" >
											Ver Historial de Citas 
										</button></th>
										<br><br>
										<th><button id='historial' class='btn btn-success label-rounded'>
											<img src="{{asset('laravel\img\historial.png')}}" >
											Ver Historial de Ubicaciones
										</button></th>
										<br> <br>
										<th><button id='famili' class='btn btn-success label-rounded'>
											<img src="{{asset('laravel\img\historial.png')}}" >
											Ver Personas afiliadas
										</button></th>
										
								</div>
							</div>
	</table>


						
					<!-- Paginacion  -->
	<div class="col-md-10 col-md-offset-1">

		<!--  ESTA ES LA SECCION DONDE SE CARGAN LOS DATOS -->
		

		<div align='center'>
			<div id='nresultado'>
				<div id='historico_movimientos'>
				
					<!-- HISTORICO UBICACIONES -->
					<h1 align='center'>Registro de Movimientos Expediente</h1><br>
					@if($historial->isEmpty())  
					<h2>No hay elementos que mostrar</h2>
					
					@else			
					
					<table class="table table-striped">
					
					<thead>
					<tr class="table-active" title='tabla'>
					<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nombre Trabajador que tomo expediente</th>
					<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Área requisicion</th>
					<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Fecha y hora petición</th>
					<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Estatus</th>

					</tr>
					</thead>
					<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CARCHIVO  -->

					<tbody>
					@foreach($historial as $his)
					<tr>
					<th class="table-active" scope="row">{{$his->ap_tra.' '.$his->am_tra.' '.$his->nombre_tra}}</th>
					<td>{{$his->nombre_area}}</td>
					<td>
					{{\Carbon\Carbon::parse($his->created_at)->format('D, d M \'Y, h:i A')}}</td>


						</td>
					</tr>
					@endforeach
					</tbody>

					</table>
					@endif
				</div>
					
				
				<div id='historico_citas_ind'>
					<!-- HISTORICO DE CITAS -->
					<h1 align='center'>Historico de Citas</h1><br>
					@if($his_citas->isEmpty())  
					<h2>No hay elementos que mostrar</h2>
					@else
					
					<table class="table table-striped">
						
						<tr class="table-active">
							<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Fecha</th>
							<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Hora</th>
							<th scope="col"><i class="mdi mdi mdi-apps"></i>Área médica</th>
						</tr>
						<tbody>
						@foreach($his_citas as $cit)			
						<tr>
							<th class="table-active" scope="row">{{\Carbon\Carbon::parse($cit->fecha)->format('D, d M \'Y')}}</th>
							<td>{{\Carbon\Carbon::parse($cit->hora)->format('h:i A')}}</td>
							<td>{{$cit->area_med}}</td>
						</tr>
						@endforeach
						</tbody>
						
					</table>
					@endif
				</div>
				
				<!-- PERSONAS AFILIADAS -->
				<div id='familiares'>
					
					<h1 align='center'>Integrantes Núcleo Familiar</h1><br>
						<a href="{{URL::action('cNucleoFamiliar@nuevofamiliar',['id_expediente'=>$expedientes->id_expediente])}}"> 
						<button>					
						<img src="{{asset('laravel\img\UserAdd_40960.png')}}" > Agregar nuevo integrante familiar					
						</button>
						</a>
					
					<!--MIERCOLES, 06-MAR-2019 -->
					@if($ffamm->isEmpty())  
					<h2>No hay elementos que mostrar</h2>
					
					@else
					<table class="table table-striped">
						
						<tr class="table-active">
							<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Nombre</th>
							<th scope="col"><i class="mdi mdi-format-list-numbers"></i>CURP</th>
							<th scope="col"><i class="mdi mdi mdi-apps"></i>Parentesco</th>
							<th colspan=2>Acciones</th>
						</tr>
						@foreach($ffamm as $fam)
						<tbody id="pacientes-list"name="pacientes-list">						
						<tr id="fam{{$fam->id_paciente}}" class='active'>
							<th class="table-active" scope="row">{{$fam->ap_paciente}} {{$fam->am_paciente}} {{$fam->nom_paciente}}</th>
							<td>{{$fam->curp}}</td>
							<td>{{$fam->parentesco}}</td>
							<td>
								
								<a href="{{URL::action('cNucleoFamiliar@modificafamiliar',['id_expediente'=>$fam->id_expediente])}}"> 
									<button class="btn btn-detail open_modal">
									
										<img src="{{asset('laravel\img\UserEdit_40958.png')}}" >
									
									</button>
									</a>
									<!--
									<button class="btn btn-detail delete_product">
									<a href="#">
										<img src="{{asset('laravel\img\document_delete_256_icon-icons.com_75995.png')}}" >
									</a>
									</button>
									-->
									
							</td>
						</tr>
						
						</tbody>
						@endforeach
						
						
				
					</table>
					@endif
					
				
				</div>	
					
				
				</div>
				
			</div>
		</div>
	</div>			

	</div>



	<style type="text/css">
	content: "\f464";
	</style>

				<!-- End Container fluid  -->
		@stop
		