@extends('layout.master')
@section('estilos')

<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script> 

<script>
$(document).ready(function(){

    $("#historico_citas_ind").hide();
    
        $("#historial").click(function(){
            $("#historico_citas_ind").hide(); 
        });
        
        $("#histcitas").click(function(){
            $("#historico_citas_ind").show();           
        });     

        $("#histcitas").dblclick(function(){
            $('#historico_citas_ind').hide();       
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
                        <h4 class="page-title">Paciente</h4>
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
        <div class="col-lg-5 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title m-t-10">{{$poblacion->id_pob_abie}}</h4>
									<input type='text' id='id' value='{{$poblacion->id_pob_abie}}' name='id'  hidden>
                                    <h6 class="card-subtitle">Id del Paciente</h6>
       <h4 class="card-title m-t-10">{{$poblacion->curp}}</h4>
                                    <h6 class="card-subtitle">CURP</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body" align="center">
                                    <button id='histcitas' class='btn btn-success'>
                                        <img src="{{asset('principal\assets\images\historial.png')}}" >
                                        Ver Historial de Citas 
                                    </button>
                            </div>
                        </div>

</div>
<!-- Column -->

	<div class="col-lg-7 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
									<center><label class="col-md-20">Información del Paciente</label></center>
                                        <label class="col-md-12">Nombre Completo: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '{{$poblacion->ap_paciente.' '.$poblacion->am_paciente.' '.$poblacion->nom_paciente}}' class="form-control form-control-line"readonly>
                                        </div>
										</div>
									<div class="form-group">
										<label class="col-md-12">Edad: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '{{$poblacion->edad}}' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Fecha de Nacimiento:</label>
                                        <div class="col-md-12">
                                            <input type="date" value = '{{$poblacion->fecha_nacimiento}}' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Telefono: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '{{$poblacion->telefono}}' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Vialidad: </label>
                                        <div class="col-md-12">
                                            <input type="text" value = '{{$poblacion->nom_vialidad}}' class="form-control form-control-line"readonly>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="col-md-12">Sexo: </label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" 
											@if ($poblacion->sexo=='M') echo value = 'Masculino'; @endif
											@if ($poblacion->sexo=='F') echo value = 'Femenino'; @endif											
											readonly>
											
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>				
					</div>		

</div>
<!-- End Container fluid  -->
<div class="table-responsive">

    <!--  ESTA ES LA SECCION DONDE SE CARGAN LOS DATOS -->

<div align='center'>
    <div id='nresultado'>
        <div id='historico_citas_ind'>
        <h1 align='center'>Historial de Citas</h1><br>
        <table class="table table-striped">
            <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Área médica</th>
            <th>Consultorio</th>
            <th>Doctor</th>
            </tr>
            @foreach($citaspobabi as $chpa)
            <tr>
                <td>{{$chpa->fecha}}</td>
                <td>{{$chpa->hora}}</td>
                <td>{{$chpa->area_med}}</td>
                <td>{{$chpa->num_consul}}</td>
                <td>{{$chpa->doctor}}</td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>
</div>
@stop