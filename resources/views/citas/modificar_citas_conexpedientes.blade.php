@extends('layout.master')
@section('contenido')
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
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <!--
                                <ol class="breadcrumb">
                                    <h4 class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </h4>
                                    <h4 class="breadcrumb-item">
                                        <a href="{{ 'conexpedientes' }}">Regresar</a>
                                    </h4>
									-->
                                    <center>
                                    <h1>Modificar Cita con Expediente</h1>
                                    </center>
								<!--
                                </ol>
                            -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


<div class="container-fluid">
  <div class="row">
   <div class="col-12">

  <div class="card card-body">

<form action = "{{route('guardar_modificacion_cita_con_expediente')}}" method = "POST">
     {{csrf_field()}}
@foreach($fa as $f)

<font size=3 style="color: black;">Datos del paciente</font>

                <br>
                <br>
                <br>

<div class="form-group"hidden>

    <input  type="text" class="form-control" name = 'id_cit' id = 'id_cit' value="{{$f->id_cit}}">

</div>



<table>
  

<tr>
  <td>

	<div class="form-group">
    	<label>
    		Id expediente:
    	</label>

    	<input type="text" class="form-control" name = 'id_expediente' id = 'id_expediente'value="{{$f->id_expediente}}" readonly="readonly">
	</div>

  </td>


  <td>
	  	<label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </td>


  <td>

	<div class="form-group">
    	<label>
    		Nombre del paciente: 
    	</label>

    	<input type="text" class="form-control" name = 'nom_paciente'  id = 'nom_paciente' value="{{$f->nom_paciente}}" readonly="readonly">
	</div>

   </td>



   <td>
	  	<label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
   </td>


  <td>

	<div class="form-group">
    	<label>
    		Apellido paterno del paciente: 
    	</label>

    	<input type="text" class="form-control" name = 'ap_paciente'  id = 'ap_paciente' value="{{$f->ap_paciente}}" readonly="readonly">
	</div>

   </td>




   <td>
	  	<label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
   </td>




<td>
	

	<div class="form-group">
    	<label>
    		Apellido materno del paciente: 
    	</label>

    	<input type="text" class="form-control" name = 'am_paciente'  id = 'am_paciente' value="{{$f->am_paciente}}" readonly="readonly">
	</div>



</td>
</tr>
</table>




<br>
<br>
<br>
<font size=3 style="color: black;">Modificar cita</font>

<br>
<br>


<table>
	
<tr>
  <td>	

	<div class="form-group">
    	<label>
    		Fecha: 
    	</label>

    	<input type="text" class="form-control" name = 'fecha' id = 'fecha' value="{{$f->fecha}}" readonly="readonly">
	</div>

  </td>



  <td>
	  <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </td>



  <td>
	
	<div class="form-group">
    	<label>
    		Hora: 
    	</label>

    	<input type="time" class="form-control" name = 'hora' id = 'hora' value="{{$f->hora}}" >
	</div>


  </td>

  <td>
	  <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </td>

  <td>

	<div class="form-group">
    	<label>
    		Area medica: 
    	</label>

    	<!--<input type="text" class="form-control" name = 'area_med' id = 'area_med' value="{{$f->area_med}}" >-->
    	<select class="form-control" name = 'area_med' id="area_med" value="{{$f->area_med}}">
        
        <option value="{{$f->area_med}}">
          <?php echo $f->area_med ?>
        </option>  

         
        
        @foreach($unidades as $uni)
        <option value = '{{$uni->nombre_area}}'>{{$uni->nombre_area}}</option>
        @endforeach
          
    	</select>
	</div>

  </td>

  <td>
	  <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </td>

  <td>
  	
	<div class="form-group">
    	<label>
    		Numero de consultorio: 
    	</label>

    	<!--<input type="text" class="form-control" name = 'num_consul' id = 'num_consul' value="{{$f->num_consul}}" >-->
    	<select class="form-control" name = 'num_consul' id="num_consul" value="{{$f->num_consul}}">
        
        <option value="{{$f->num_consul}}">
          <?php echo $f->num_consul ?>
        </option>  

         
        
        @foreach($consultorios as $consul)
        <option value = '{{$consul->num_consul}}'>{{$consul->num_consul}}</option>
        @endforeach
          
    	</select>
	</div>

  </td>

</tr>

<tr>

  
  <td>
  		
	<div class="form-group">
    	<label>
    		Doctor: 
    	</label>

    	<!--<input type="text" class="form-control" name = 'doctor' id = 'doctor' value="{{$f->doctor}}" >-->
    	<select class="form-control" name = 'doctor' id="doctor" value="{{$f->doctor}}">
        
        <option value="{{$f->doctor}}">
          <?php echo $f->doctor ?>
        </option>  

         
        
        @foreach($doctores as $doc)
        <option value = '{{$doc->nom_doc}}'>{{$doc->nom_doc}}</option>
        @endforeach
          
    	</select>
	</div>

  </td>

  <td>
	  <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  </td>

  <td>

	<div class="form-group">
    	<label>
    		Asistencia: 
    	</label>

    	<!--<input type="text" class="form-control" name = 'asistencia'  id = 'asistencia' value="{{$f->asistencia}}" >-->
    	<select class="form-control" name = 'asistencia' id="asistencia" value="{{$f->asistencia}}">
        
        <option value="{{$f->asistencia}}">
          <?php echo $f->asistencia ?>
        </option>  

        <?php if ($f->asistencia == 'Si'): ?>
                        <option value = 'No'>No</option>
                        <option value = 'Indef'>Indef</option>
                <?php endif ?>

        <?php if ($f->asistencia == 'No'): ?>
                        <option value = 'Si'>Si</option>
                        <option value = 'Indef'>Indef</option>
                <?php endif ?>

        <?php if ($f->asistencia == 'Indef'): ?>
                        <option value = 'Si'>Si</option>
                        <option value = 'No'>No</option>
                <?php endif ?>        
        
          
    	</select>
	</div>

</td>
</tr>
</table>










            @endforeach
               
                                      
<center>      

     <div class="col-sm-12">

        <input type  ='submit' class="btn btn-success" value = 'Guardar'>

        <input type  ='reset' class="btn btn-warning" value = 'Limpiar'>

    </div>

</center>


</form>

</div>
</div>
</div>
@stop


@section('js')







 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>










<script>
    $(function () {
    $("#fecha").datepicker();
    });
  </script>





  <script>
   $.datepicker.regional['es'] = {
   closeText: 'Cerrar',
   prevText: '< Ant',
   nextText: 'Sig >',
   currentText: 'Hoy',
   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
   weekHeader: 'Sm',
   dateFormat: 'yy-mm-dd',
   firstDay: 1,
   isRTL: false,
   showMonthAfterYear: false,
   yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);
  $(function () {
  $("#fecha").datepicker();
  });



  </script>
@endsection
