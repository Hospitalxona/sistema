@extends('main')
@section('contenido')
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Revisar información del expediente</h4>
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
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title m-t-10">{{$expedientes->id_expediente}}</h4>
                                    <h6 class="card-subtitle">Id del Expediente</h6>
       <h4 class="card-title m-t-10">{{$expedientes->ubicacion}}</h4>
                                    <h6 class="card-subtitle">Ubicación</h6>
                            </div>
                        </div>

						<div class="card">
                            <div class="card-body">
							 <h4 class="page-title">Información de la unidad medica</h4>
						 <h4 class="card-title m-t-10">{{$unidades->clues}}</h4>
                                    <h6 class="card-subtitle">CLUES</h6>
       <h4 class="card-title m-t-10">{{$unidades->nom_unidad}}</h4>
                                    <h6 class="card-subtitle">Nombre de la unidad</h6>
						 
						 
						 </div>
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
                                            <input type="text" value = '{{$pacientes->nom_paciente.' '.$pacientes->ap_paciente.' '.$pacientes->am_paciente}}' class="form-control form-control-line"readonly>
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
										<label class="col-md-12">Fecha de Nacimiento: </label>
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
                    </div>
                    <!-- Column -->
                </div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

			<!-- End Container fluid  -->
            @stop