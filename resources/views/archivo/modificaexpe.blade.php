@extends('layout.master')
@section('contenido')

<script type="text/javascript">
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}

</script>

<!-- =========

===================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
			    <div class="page-breadcrumb">
                <div class="row">
                 <div class="col-5 align-self-center">
                        <h4 class="page-title">Modificar expediente</h4>
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
                <h2>Modificar Expediente</h2>
            
              <center>

                </div>
            </div>


<div class="container-fluid">
  <div class="row">
   <div class="col-12">

  <div class="card card-body">
 <form action = "{{route('guardamodifica')}}" method = "POST">
	 {{csrf_field()}}
@foreach($fa as $f)
<div class="form-group"hidden>

<input  type="text" class="form-control" name = 'id_expediente' id = 'id_expediente'value="{{$f->id_expediente}}">

</div>
<div class="form-group">
<label>Id Paciente :</label>
<input type="text" class="form-control" name = 'id_paciente' id = 'id_paciente'value="{{$f->id_paciente}}" readonly ='readonly'>

</div>
<div class="form-group">
<label>Nombre Paciente :</label>
<input type="text" class="form-control" name = 'nom_paciente' id = 'nom_paciente' value="{{$f->nom_paciente}}" >
</div>

<div class="form-group">
<label>Apellido Paterno :</label>
<input type="text" class="form-control" name = 'ap_paciente' id = 'ap_paciente' value="{{$f->ap_paciente}}" >
</div>
<div class="form-group">
<label>Apellido Materno :</label>
<input type="text" class="form-control" name = 'am_paciente' id = 'am_paciente' value="{{$f->am_paciente}}" >
</div>
<div class="form-group">
<label>Edad :</label>
<input type="text" class="form-control" name = 'edad' id = 'edad' value="{{$f->edad}}" >
</div>
<div class="form-group">
                                    <label>Sexo: </label>
 <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="sexo" id="sexo" class="custom-control-input" VALUE='M'@if ($f->sexo=='M') echo checked="checked"; @endif>
                                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="sexo" id="sexo" class="custom-control-input" VALUE='F' @if ($f->sexo=='F') echo checked="checked"; @endif>
                                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                                        </div>                            
								</div>	
<div class="form-group">
<label>Curp :</label>
<input type="text" class="form-control" name = 'curp' id = 'id1' value="{{$f->curp}}" placeholder="Curp" 
onblur="aMayusculas(this.value,this.id)" required="required" maxlenght="5">
</div>
<div class="form-group">
<label>Parentesco :</label>
<input type="text" class="form-control" name = 'parentesco'  id = 'parentesco' value="{{$f->parentesco}}" >
</div>
<div class="form-group">
<label>Numero Afiliacion :</label>
<input type="text" class="form-control" name = 'num_afiliacion'  id = 'num_afiliacion' value="{{$f->num_afiliacion}}" >
</div>
<div class="form-group">
<label>Ubicacion:</label>
    <select type="text" class="form-control" name = 'ubicacion' id = 'ubicacion' >
        <option value="Archivo">Archivo</option>
        <option value="Sistemas">Sistemas</option>
        <option value="Urgencias">Urgencias</option>
        <option value="Quirofano">Quirofano</option>
        <option value="Triage">Triage</option>
        <option value="Ginecologia">Ginecologia</option>
        <option value="Pediatria">Pediatria</option>
        <option value="Anestesiologia">Anestesiologia</option>
        <option value="Cirugia">Cirugia</option>
        <option value="Nutricion">Nutricion</option>
        <option value="Gobierno">Gobierno</option>
        <option value="Psicologia Clinica">Psicologia Clinica</option>
        
    </select>

<div class="form-group">
<label>Fecha Nacimiento:</label>
<input type="date" class="form-control" name = 'fecha_nacimiento' id = 'ubicacion' value="{{$f->fecha_nacimiento}}" >
</div>
<div class="form-group">
<label>Afiliacion Seguro:</label>
<input type="text" class="form-control" name = 'afiliacion_seguro' id = 'ubicacion' value="{{$f->afiliacion_seguro		}}" >
</div>
<div class="form-group">
<label>Localidad:</label>
<input type="text" class="form-control" name = 'localidad' id = 'localidad' value="{{$f->localidad}}" >
</div>
<div class="form-group">
<label>Codigo Postal:</label>
<input type="text" class="form-control" name = 'cp' id = 'ubicacion' value="{{$f->cp}}" >
</div>
<div class="form-group">
<label>Telefono:</label>
<input type="text" class="form-control" name = 'telefono' id = 'ubicacion' value="{{$f->telefono}}" >
</div>








			@endforeach
               
									  
									  
 <div class="col-sm-12">
<input type  ='submit' class="btn btn-success" value = 'Guardar'>
<input type  ='reset' class="btn btn-warning" value = 'Limpiar'>
</div>


</form>



</div>
</div>
</div>


@stop
