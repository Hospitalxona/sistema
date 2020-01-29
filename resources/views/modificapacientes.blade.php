
@extends('layout.master')
@section('contenido')

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script> 

    <section class="content-header">
      <h1>
             Modificación de Paciente
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'inicio'}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ 'pacientes' }}">Pacientes</a></li>
        <li class="active">Modificación De Paciente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Sección De Modificación</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "{{route('modificapaciente')}}" method = "POST" >
{{csrf_field()}}
<div class="form-group">
<label>Id Paciente :</label>
<input type="text" class="form-control" name = 'id_paciente' value="{{$pacientes->id_paciente}}" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nom_paciente' value="{{$pacientes->nom_paciente}}" required placeholder="Ej. Pedro Juan">
@if($errors->first('nom_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nom_paciente') }}</span> </i> 
@endif                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_paciente' value="{{$pacientes->ap_paciente}}" required placeholder="Ej. Lopéz">
@if($errors->first('ap_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('ap_paciente') }}</span> </i> 
@endif                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_paciente' value="{{$pacientes->am_paciente}}" required placeholder="Ej. Herrera">
@if($errors->first('am_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('am_paciente') }}</span> </i> 
@endif                                
								</div>

 <div class="form-group">
                                    <label>CURP: </label>
                                    <input type="text" class="form-control" name = 'curp' value="{{$pacientes->curp}}" required placeholder="Ej. BADD110313HCMLNS09">
@if($errors->first('curp')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('curp') }}</span> </i> 
@endif                                
								</div>
								 <div class="form-group">
<label>Telefono: </label>
                                    <input type="text" class="form-control" name = 'telefono' value="{{$pacientes->telefono}}" required placeholder="Ej. 1234567890">
@if($errors->first('telefono')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('telefono') }}</span> </i> 
@endif                                
								</div>	
								 <div class="form-group">
<label>Edad: </label>
                                    <input type="text" class="form-control" name = 'edad' value="{{$pacientes->edad}}" required placeholder="Ej. 23">
@if($errors->first('edad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('edad') }}</span> </i> 
@endif                                
								</div>	
							
								<div class="form-group">
                                    <label>Fecha de Nacimiento: </label>
                                    <input type="date" class="form-control" name = 'fecha_nacimiento' value="{{$pacientes->fecha_nacimiento}}" required >
@if($errors->first('fecha_nacimiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('fecha_nacimiento') }}</span> </i> 
@endif                                
								</div>
<div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" class="custom-control-input" VALUE='M'@if ($pacientes->sexo=='M') echo checked="checked"; @endif>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" class="custom-control-input" VALUE='F' @if ($pacientes->sexo=='F') echo checked="checked"; @endif>
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
								</div>		
	<div class="form-group">
                                    <label>Afiliación Seguro: </label>
                                    <input type="text" class="form-control" name = 'afiliacion_seguro' value="{{$pacientes->afiliacion_seguro}}" required placeholder="Ej. IMMS,ISSTE...">
@if($errors->first('afiliacion_seguro')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('afiliacion_seguro') }}</span> </i> 
@endif                                
								</div>
<div class="form-group">
                                    <label>Número de Afiliación: </label>
                                    <input type="text" class="form-control" name = 'num_afiliacion' value="{{$pacientes->num_afiliacion}}" required placeholder="Ej. 765267">
@if($errors->first('num_afiliacion')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('num_afiliacion') }}</span> </i> 
@endif                                
								</div>								
 <div class="form-group">
                                <label>Seleccione entidad de nacimiento: </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_estado'>
                          <option value = '{{$id_estado}}'>{{$estado}}</option>              
										@foreach($todasdemase as $edo)
			<option value = '{{$edo->id_estado}}'>{{$edo->nombre}}</option>
			@endforeach
                                    </select>  				
								</div>								
							<div class="form-group">
                                    <label>Seleccione su municipio : </label>
                                 
								<select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_municipio'>
<option value = '{{$id_municipio}}'>{{$municipio}}</option>                        
					  @foreach($todasdemasm as $mun)
			<option value = '{{$mun->id_municipio}}'>{{$mun->nombre_municipio}}</option>
			@endforeach
                                    </select>
</div>
		<div class="form-group">
                                    <label>Código Postal: </label>
                                    <input type="text" class="form-control" name = 'cp' value="{{$pacientes->cp}}" required placeholder="Ej. 12345,54321...">
@if($errors->first('cp')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('cp') }}</span> </i> 
@endif                                
								</div>								
	<div class="form-group">
                                    <label>Localidad: </label>
                                    <input type="text" class="form-control" name = 'localidad' value="{{$pacientes->localidad}}"" required placeholder="Ej. San Francisco,Niños Heroés...">
@if($errors->first('localidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('localidad') }}</span> </i> 
@endif                                
								</div>
			<div class="form-group">
                                    <label>Tipo de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'tipo_vialidad' value="{{$pacientes->tipo_vialidad}}" required placeholder="Ej. Calle,Avenida,Boulevard...">
@if($errors->first('tipo_vialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('tipo_vialidad') }}</span> </i> 
@endif                                
								</div>	
	 	<div class="form-group">
                                    <label>Nombre de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'nom_vialidad' value="{{$pacientes->nom_vialidad}}" required placeholder="Ej. Juarez,Independencia...">
@if($errors->first('nom_vialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nom_vialidad') }}</span> </i> 
@endif                                
								</div>
<div class="form-group">
                                    <label>Numero Exterior: </label>
                                    <input type="text" class="form-control" name = 'num_ext' value="{{$pacientes->num_ext}}" required placeholder="Ej. 1,2,3...">
@if($errors->first('num_ext')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('num_ext') }}</span> </i> 
@endif                                
								</div>									
<div class="form-group">
                                    <label>Numero Interior: </label>
                                    <input type="text" class="form-control" name = 'num_int' value="{{$pacientes->num_int}}"  placeholder="Ej. 1,2,3...">
@if($errors->first('num_int')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('num_int') }}</span> </i> 
@endif                                
								</div>
								<div class="form-group">
                                    <label>Tipo de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'tipo_asentamiento' value="{{$pacientes->tipo_asentamiento}}" required placeholder="Ej. Barrio,Colonia...">
@if($errors->first('tipo_asentamiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('tipo_asentamiento') }}</span> </i> 
@endif                                
								</div>	
<div class="form-group">
                                    <label>Nombre de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'nombre_asentamiento' value="{{$pacientes->nombre_asentamiento}}" required placeholder="Ej. Guadalupe,Indios Verdes...">
@if($errors->first('nombre_asentamiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nombre_asentamiento') }}</span> </i> 
@endif                                
								</div>	
																						  
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop
















