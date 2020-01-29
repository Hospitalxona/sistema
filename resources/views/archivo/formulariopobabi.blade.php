@extends('layout.master')
@section('contenido')
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script> 

<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Alta de Paciente</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
									<li class="breadcrumb-item">
                                        <a href="{{ 'pacientes' }}">Pacientes</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Alta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "guardapob" method = "POST" >
{{csrf_field()}}
<div class="form-group">
<label>Id Paciente :</label>
<input type="text" class="form-control" name = 'id_pob_abie' value="{{$idps}}" readonly ='readonly'>
</div>
     <div class="form-group">
                                    <label>Nombre(S): </label>
                                    <input type="text" class="form-control" name = 'nom_paciente' value="{{old('nom_paciente')}}" required placeholder="Ej. Pedro Juan">
@if($errors->first('nom_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nom_paciente') }}</span> </i> 
@endif                                
								</div>
	 <div class="form-group">
                                    <label>Apellido Paterno: </label>
                                    <input type="text" class="form-control" name = 'ap_paciente' value="{{old('ap_paciente')}}" required placeholder="Ej. Lopéz">
@if($errors->first('ap_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('ap_paciente') }}</span> </i> 
@endif                                
								</div>
 <div class="form-group">
                                    <label>Apellido Materno: </label>
                                    <input type="text" class="form-control" name = 'am_paciente' value="{{old('am_paciente')}}" required placeholder="Ej. Herrera">
@if($errors->first('am_paciente')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('am_paciente') }}</span> </i> 
@endif                                
								</div>

 <div class="form-group">
                                    <label>CURP: </label>
                                    <input type="text" class="form-control" name = 'curp' value="{{old('curp')}}" required placeholder="Ej. BADD110313HCMLNS09">
@if($errors->first('curp')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('curp') }}</span> </i> 
@endif                                
								</div>
								 <div class="form-group">
<label>Edad: </label>
                                    <input type="text" class="form-control" name = 'edad' value="{{old('edad')}}" required placeholder="Ej. 10">
@if($errors->first('edad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('edad') }}</span> </i> 
@endif                                
								</div>
								<div class="form-group">
                                    <label>Fecha de Nacimiento: </label>
                                    <input type="date" class="form-control" name = 'fecha_nacimiento' value="{{old('fecha_nacimiento')}}" required >
@if($errors->first('fecha_nacimiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('fecha_nacimiento') }}</span> </i> 
@endif                                
								</div>
<div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" class="custom-control-input" VALUE='M'CHECKED>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" class="custom-control-input" VALUE='F'>
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
								</div>
        <div class="form-group">
                                    <label>Nombre de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'nom_vialidad' value="{{old('nom_vialidad')}}" required placeholder="Ej. Juarez,Independencia...">
@if($errors->first('nom_vialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nom_vialidad') }}</span> </i> 
@endif                                
                                </div>
            <div class="form-group">
                                    <label>Tipo de Vialidad: </label>
                                    <input type="text" class="form-control" name = 'tipo_vialidad' value="{{old('tipo_vialidad')}}" required placeholder="Ej. Calle,Avenida,Boulevard...">
@if($errors->first('tipo_vialidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('tipo_vialidad') }}</span> </i> 
@endif                                
                                </div>
<div class="form-group">
                                    <label>Numero Interior: </label>
                                    <input type="text" class="form-control" name = 'num_int' value="{{old('num_int')}}"  placeholder="Ej. 1,2,3...">
@if($errors->first('num_int')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('num_int') }}</span> </i> 
@endif                                
                                </div>
<div class="form-group">
                                    <label>Numero Exterior: </label>
                                    <input type="text" class="form-control" name = 'num_ext' value="{{old('num_ext')}}" required placeholder="Ej. 1,2,3...">
@if($errors->first('num_ext')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('num_ext') }}</span> </i> 
@endif                                
                                </div>

<div class="form-group">
                                    <label>Nombre de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'nombre_asentamiento' value="{{old('nombre_asentamiento')}}" required placeholder="Ej. Guadalupe,Indios Verdes...">
@if($errors->first('nombre_asentamiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('nombre_asentamiento') }}</span> </i> 
@endif                                
                                </div>

                                <div class="form-group">
                                    <label>Tipo de Asentamiento: </label>
                                    <input type="text" class="form-control" name = 'tipo_asentamiento' value="{{old('tipo_asentamiento')}}" required placeholder="Ej. Barrio,Colonia...">
@if($errors->first('tipo_asentamiento')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('tipo_asentamiento') }}</span> </i> 
@endif                                
                                </div>

        <div class="form-group">
                                    <label>Código Postal: </label>
                                    <input type="text" class="form-control" name = 'cp' value="{{old('cp')}}" required placeholder="Ej. 12345,54321...">
@if($errors->first('cp')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('cp') }}</span> </i> 
@endif                                
                                </div>

    <div class="form-group">
                                    <label>Localidad: </label>
                                    <input type="text" class="form-control" name = 'localidad' value="{{old('localidad')}}" required placeholder="Ej. San Francisco,Niños Heroés...">
@if($errors->first('localidad')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('localidad') }}</span> </i> 
@endif                                
                                </div>
     <div class="form-group">
                                    <label>Telefono: </label>
                                    <input type="text" class="form-control" name = 'telefono' value="{{old('telefono')}}" required placeholder="Ej. 7228930198">
@if($errors->first('telefono')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('telefono') }}</span> </i> 
@endif                                
                                </div>

							<div class="form-group">
                                    <label>Seleccione su Municipio : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_municipio'>
                                        @foreach($municipios as $mun)
			<option value = '{{$mun->id_municipio}}'>{{$mun->nombre_municipio}}</option>
			@endforeach
                                    </select>
</div>

                            <div class="form-group">
                                    <label>Seleccione su Estado : </label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_estado'>
                                        @foreach($estados as $est)
            <option value = '{{$est->id_estado}}'>{{$est->nombre}}</option>
            @endforeach
                                    </select>
</div>									
	
		 <input type="text" name = 'ExpedienteD' value="No" required hidden>														  
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>
</form>
</div>
</div>
</div>
</div>

@stop