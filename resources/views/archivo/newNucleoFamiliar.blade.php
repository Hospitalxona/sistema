@extends('layout.master')



@section('receta')
           <div class="page-breadcrumb">
                <div class="row">
                 <div class="col-5 align-self-center">
                        <h4 class="page-title">Agregar Familiar</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Expedientes Digitales </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                
               <center>
                <h2>Agregar Nuevo Familiar</h2>
            
              <center>

                </div>
            </div>
@endsection 


@section('contenido')
<div class="panel panel-default">
	<div class="panel-body">
	
		<form role="form" class="form-horizontal"  id='newfamilia' action="{{route('nvaltafamiliar')}}" method="POST">
			{{csrf_field()}}

			<div class="form-group">
				<label for="num_afiliacion" class="col-md-4 control-label">Número de Afiliación:</label>

				<div class="col-md-6">
					<input id="num_afiliacion" type="text" class="form-control" name="num_afiliacion" required autofocus value="{{$pacientes->num_afiliacion}}" readonly>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="folio" class="col-md-4 control-label">Folio:</label>

				<div class="col-md-6">
					<input id="folio" type="text" class="form-control" name="folio" required autofocus value="{{$expedientes->folio}}" readonly>
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="ap_paciente" class="col-md-4 control-label">Apellido Paterno:</label>

				<div class="col-md-6">
					<input id="ap_paciente" type="text" class="form-control" name="ap_paciente" required autofocus  required='true' lettersonly='true' placeholder="Apellido Paterno">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="ap_paciente" class="col-md-4 control-label">Apellido Materno:</label>

				<div class="col-md-6">
					<input id="am_paciente" type="text" class="form-control" name="am_paciente" required autofocus placeholder="Apellido Materno">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="nom_paciente" class="col-md-4 control-label">Nombres(s):</label>

				<div class="col-md-6">
					<input id="nom_paciente" type="text" class="form-control" name="nom_paciente" required autofocus placeholder="Nombre(s) del paciente">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="curp" class="col-md-4 control-label">CURP:</label>

				<div class="col-md-6">
					<input id="curp" type="text" class="form-control" name="curp" required autofocus placeholder="CURP">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="parentesco" class="col-md-4 control-label">Parentesco:</label>
	
				<div class="col-md-6">
					<input id="parentesco" type="text" class="form-control" name="parentesco" required autofocus placeholder="Parentesco con el Titular">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="edad" class="col-md-4 control-label">Edad:</label>
	
				<div class="col-md-6">
					<input id="edad" type="number" class="form-control" name="edad" required autofocus placeholder="Parentesco con el Titular">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="telefono" class="col-md-4 control-label">Telefono:</label>
	
				<div class="col-md-6">
					<input id="telefono" type="text" class="form-control" name="telefono" required autofocus placeholder="Telefono Personal">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="sexo" class="col-md-4 control-label">Sexo:</label>
	
				<div class="col-md-6">
					<input id="sexo" type="radio" name="sexo" required autofocus  checked value='M'>Masculino 
					<br>
					<input id="sexo" type="radio" name="sexo" required autofocus value='F'>Femenino
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="fecha_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento:</label>
	
				<div class="col-md-6">
					<input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" required autofocus placeholder="Colocar en aaaa-mm-dd" data-format="yyyy-MM-dd">
					<span class="msg-error hidden" id="err_nombre"></span>
				</div>
			</div>
<input type="text" value="{{$expedientes->id_expediente}}" id="id_expediente" name="id_expediente" hidden>
			<input type="text" value="{{$pacientes->id_paciente}}" id="id_paciente" name="id_paciente" hidden>
			
			<input type="text" value="{{$pacientes->afiliacion_seguro}}" id="afiliacion_seguro" name="afiliacion_seguro" hidden>
			<input type="text" value="{{$pacientes->nom_vialidad}}" id="nom_vialidad" name="nom_vialidad" hidden>
			<input type="text" value="{{$pacientes->tipo_vialidad}}" id="tipo_vialidad" name="tipo_vialidad" hidden>
			<input type="text" value="{{$pacientes->num_int}}" id="num_int" name="num_int" hidden>
			<input type="text" value="{{$pacientes->num_ext}}" id="num_ext" name="num_ext" hidden>
			<input type="text" value="{{$pacientes->nombre_asentamiento}}" id="nombre_asentamiento" name="nombre_asentamiento" hidden>
			<input type="text" value="{{$pacientes->tipo_asentamiento}}" id="tipo_asentamiento" name="tipo_asentamiento" hidden>
			<input type="text" value="{{$pacientes->cp}}" id="cp" name="cp" hidden>
			<input type="text" value="{{$pacientes->localidad}}" id="localidad" name="localidad" hidden>			
			<input type="text" value="{{$pacientes->id_municipio}}" id="id_municipio" name="id_municipio" hidden>
			<input type="text" value="{{$pacientes->id_estado}}" id="id_estado" name="id_estado" hidden>


<input type="text" value="{{$expedientes->id_unidad}}" id="id_unidad" name="id_unidad" hidden>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<input type="submit" class="btn btn-primary" value='Actualizar' data-form='familia'>
						
					
					<button type='reset' class="btn btn-warning">Limpiar</button>
				</div>
			</div>
		</form>
	</div>
</div>


@endsection