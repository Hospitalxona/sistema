@extends('layout.master')


@section('contenido')

    <section class="content-header">
      <h1>
                 Alta de Nuevo Trabajador
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'inicio'}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ 'trabajadores' }}">Trabajadores</a></li>
        <li class="active">Alta Trabajador</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Sección de Registro Trabajador</h3>

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
 <form class="form-horizontal m-t-30" action = "{{route('guardatrabajador')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}
<div class="form-group">
<label>Id Trabajador :</label>
<input type="text" class="form-control" name = 'id_trabajador' value="{{$idts}}" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nombre_tra' value="{{old('nombre_tra')}}" required placeholder="Ej. Pedro Juan">
@if($errors->first('nombre_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nombre_tra') }}</span> </i> 
@endif                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_tra' value="{{old('ap_tra')}}" required placeholder="Ej. Lopéz">
@if($errors->first('ap_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('ap_tra') }}</span> </i> 
@endif                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_tra' value="{{old('am_tra')}}" required placeholder="Ej. Herrera">
@if($errors->first('am_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('am_tra') }}</span> </i> 
@endif                                
								</div>								
 <div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" class="custom-control-input" VALUE='M'CHECKED>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2" VALUE='F'>Femenino</label>
                                        </div>                            
								</div>	
								
	<div class="form-group">
                                    <label>Cedula Profesional: </label>
                                    <input type="text" class="form-control" name = 'cedula_profesional' value="{{old('cedula_profesional')}}" required placeholder="Ej.12345678">
@if($errors->first('cedula_profesional')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('cedula_profesional') }}</span> </i> 
@endif                                
								</div>		
	<div class="form-group">
                                    <label>Turno: </label>
                                    <input type="text" class="form-control" name = 'turno' value="{{old('turno')}}" required placeholder="Ej.Nocturno A">
@if($errors->first('turno')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('turno') }}</span> </i> 
@endif                                
								</div>		
<div class="form-group">
                                    <label>Dias Laborales: </label>
                                    <input type="text" class="form-control" name = 'dias_laborales' value="{{old('dias_laborales')}}" required placeholder="1-7">
@if($errors->first('dias_laborales')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('dias_laborales') }}</span> </i> 
@endif                                
								</div>	
<div class="form-group">
                                    <label>Hora de Entrada: </label>
                                    <input type="time" class="form-control" name = 'hr_entrada' value="{{old('hr_entrada')}}" required >
@if($errors->first('hr_entrada')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('hr_entrada') }}</span> </i> 
@endif                                
								</div>									
<div class="form-group">
                                    <label>Hora de Salida: </label>
                                    <input type="time" class="form-control" name = 'hr_salida' value="{{old('hr_salida')}}" required >
@if($errors->first('hr_salida')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('hr_salida') }}</span> </i> 
@endif                                
								</div>	
								<div class="form-group">
                                    <label>Especialidad: </label>
                                    <input type="text" class="form-control" name = 'especialidad' value="{{old('especialidad')}}" required placeholder="Ing./Lic. En:">
@if($errors->first('especialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('especialidad') }}</span> </i> 
@endif                                
								</div>
	<div class="form-group">
                                    <label>Escolaridad: </label>
                                    <input type="text" class="form-control" name = 'escolaridad' value="{{old('escolaridad')}}" required placeholder="Primaria/Secundaria/Preparatoria/...:">
@if($errors->first('escolaridad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('escolaridad') }}</span> </i> 
@endif                                
								</div>	
							
								
						
								<div class="form-group">
<label for="example-email">Correo Electronico:</label>

<input type="email" id="example-email" name="email" class="form-control" value="{{old('email')}}" placeholder="tucorreo@gmail.com" required>
@if($errors->first('email')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('email') }}</span> </i> 
@endif
</div>
	<div class="form-group">
                                    <label>RFC: </label>
                                    <input type="text" class="form-control" name = 'rfc' value="{{old('rfc')}}" required placeholder="Ej.ABCD123456EFG">
@if($errors->first('rfc')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('rfc') }}</span> </i> 
@endif                                
								</div>	
<div class="form-group">
                                    <label>Seleccione área</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name='area'>
                                        <option value="Quirofano" selected>Quirofano</option>
                                        <option value="Urgencias">Urgencias</option>
                                        <option value="Triage">Traige</option>
                                        <option value="Archivo">Archivo</option>
										<option value="Sistemas">Sistemas</option>
                                    </select>
</div>
									
<div class="form-group">
                                    <label>Seleccione unidad medica : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
                                        @foreach($unidades as $uni)
			<option value = '{{$uni->id_unidad}}'>{{$uni->nom_unidad}}</option>
			@endforeach
                                    </select>
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
















