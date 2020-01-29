@extends('layout.master')


@section('contenido')

    <section class="content-header">
      <h1>
         Modificación de Trabajador
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Trabajadores</a></li>
        <li class="active">Modificación Trabajador</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Seccion de Modificación</h3>

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
 <form class="form-horizontal m-t-30" action = "{{route('modificatrabajador')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}
<div class="form-group">
<label>Id Trabajador :</label>
<input type="text" class="form-control" name = 'id_trabajador' value="{{$trabajadores->id_trabajador}}" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nombre_tra' value="{{$trabajadores->nombre_tra}}" required placeholder="Ej. Pedro Juan">
@if($errors->first('nombre_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nombre_tra') }}</span> </i> 
@endif                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_tra' value="{{$trabajadores->ap_tra}}" required placeholder="Ej. Lopéz">
@if($errors->first('ap_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('ap_tra') }}</span> </i> 
@endif                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_tra' value="{{$trabajadores->am_tra}}" required placeholder="Ej. Herrera">
@if($errors->first('am_tra')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('am_tra') }}</span> </i> 
@endif                                
								</div>								
 <div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" value='M' class="custom-control-input" @if ($trabajadores->sexo=='M') echo checked="checked"; @endif >
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" value='F'class="custom-control-input" @if ($trabajadores->sexo=='F') echo checked="checked"; @endif>
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
								</div>	
								
	<div class="form-group">
                                    <label>Cedula Profesional: </label>
                                    <input type="text" class="form-control" name = 'cedula_profesional'  value="{{$trabajadores->cedula_profesional}}" required placeholder="Ej.12345678">
@if($errors->first('cedula_profesional')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('cedula_profesional') }}</span> </i> 
@endif                                
								</div>		
	<div class="form-group">
                                    <label>Turno: </label>
                                    <input type="text" class="form-control" name = 'turno' value="{{$trabajadores->turno}}" required placeholder="Ej.Nocturno A">
@if($errors->first('turno')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('turno') }}</span> </i> 
@endif                                
								</div>		
<div class="form-group">
                                    <label>Dias Laborales: </label>
                                    <input type="text" class="form-control" name = 'dias_laborales' value="{{$trabajadores->dias_laborales}}" required placeholder="1-7">
@if($errors->first('dias_laborales')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('dias_laborales') }}</span> </i> 
@endif                                
								</div>	
<div class="form-group">
                                    <label>Hora de Entrada: </label>
                                    <input type="time" class="form-control" name = 'hr_entrada' value="{{$trabajadores->hr_entrada}}" required >
@if($errors->first('hr_entrada')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('hr_entrada') }}</span> </i> 
@endif                                
								</div>									
<div class="form-group">
                                    <label>Hora de Salida: </label>
                                    <input type="time" class="form-control" name = 'hr_salida' value="{{$trabajadores->hr_salida}}" required >
@if($errors->first('hr_salida')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('hr_salida') }}</span> </i> 
@endif                                
								</div>	
								<div class="form-group">
                                    <label>Especialidad: </label>
                                    <input type="text" class="form-control" name = 'especialidad' value="{{$trabajadores->especialidad}}" required placeholder="Ing./Lic. En:">
@if($errors->first('especialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('especialidad') }}</span> </i> 
@endif                                
								</div>
	<div class="form-group">
                                    <label>Escolaridad: </label>
                                    <input type="text" class="form-control" name = 'escolaridad' value="{{$trabajadores->escolaridad}}" required placeholder="Primaria/Secundaria/Preparatoria/...:">
@if($errors->first('escolaridad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('escolaridad') }}</span> </i> 
@endif                                
								</div>	
	<div class="form-group">
                                    <label>Telefono o Celular: </label>
                                    <input type="text" class="form-control" name ="telefono" value="{{$trabajadores->telefono}}" required placeholder="Ej.7221234567">
@if($errors->first('telefono')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('telefono') }}</span> </i> 
@endif                                
								</div>								
								
						
								<div class="form-group">
<label for="example-email">Correo Electronico:</label>

<input type="email" id="example-email" name="email" class="form-control" value="{{$trabajadores->email}}" placeholder="tucorreo@gmail.com" required>
@if($errors->first('email')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('email') }}</span> </i> 
@endif
</div>
	<div class="form-group">
                                    <label>RFC: </label>
                                    <input type="text" class="form-control" name = 'rfc' value="{{$trabajadores->rfc}}" required placeholder="Ej.ABCD123456EFG">
@if($errors->first('rfc')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('rfc') }}</span> </i> 
@endif                                
								</div>	
<div class="form-group">
                                    <label>Seleccione área</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name='area'>
									  <option value = '{{$area}}' selected>{{$area}}</option>
                                        <option value="Quirofano">Quirofano</option>
                                        <option value="Urgencias">Urgencias</option>
                                        <option value="Triage">Traige</option>
                                        <option value="Archivo">Archivo</option>
										<option value="Sistemas">Sistemas</option>
                                    </select>
</div>
									
<div class="form-group">
                                    <label>Seleccione unidad medica : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
				  <option value = '{{$id_unidad}}'>{{$unidad}}</option>
                                        @foreach($todasdemas as $td)
			<option value = '{{$td->id_unidad}}'>{{$td->nom_unidad}}</option>
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
















