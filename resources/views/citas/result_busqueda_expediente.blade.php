
    <body>
        
@if($res->isEmpty()) 
    <h2 align='center' style="color: black;"> El id de expediente no existe prueba con otro </h2>   <br>
    
@else
@foreach($tre as $t)
@foreach($res as $r)






    
        


                
    

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-body">

                 <form class="form-horizontal m-t-30" action = "guardar_nueva_cita_con_ex" method = "POST" >
                {{csrf_field()}}

                    <div class="form-group">

        
        
                <font size=3 style="color: black;">Datos del paciente</font>

                <br>
                <br>
                <br>
                
                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del paciente:</label>

                <Input type="text" class="form-control" size="7" name="nom_paciente" id="" value="{{$r->nom_paciente}}" placeholder="Nombre(s)" readonly>

                <br>


                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido paterno del paciente:</label>

                <input type="text" class="form-control" size="7" name="ap_paciente" id="" value="{{$r->ap_paciente}}" placeholder="A. Paterno" readonly>

                <br>


                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido materno del paciente:</label>

                <input type="text" class="form-control" size="7" name="am_paciente" id="" value="{{$r->am_paciente}}" placeholder="A. Materno" readonly>



                <label style="color: black;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id expediente:</label>

                <input type="text" class="form-control" size="7" name="id_expediente" id="" value="{{$r->id_paciente}}" placeholder="A. Materno" readonly>
                        
                        <!--<label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id cita:</label>
                        <input type="text" class="form-control" name = 'id_cit' value="{{$idexs}}" readonly ='readonly'>

                        <br>-->
<br>
<br>
<br>
<br>
<font size=3 style="color: black;">Agendar cita</font>

<br>
<br>
                        <!--<label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id expediente:</label>
                        <input type="text" class="form-control" name = 'id_expediente' placeholder="Ej. 1" required hidden>
                        
                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre del paciente:</label>
                        <input type="text" class="form-control" name = 'nom_paciente' placeholder="Ej. Eduardo" required hidden>

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido paterno del paciente:</label>
                        <input type="text" class="form-control" name = 'ap_paciente' placeholder="Ej. Estrada" required hidden>

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apellido materno del paciente:</label>
                        <input type="text" class="form-control" name = 'am_paciente' placeholder="Ej. Palma" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:</label>
                        <input type="text" class="form-control" name = "fecha" id="fecha" placeholder="Año-mes-día" readonly="readonly" required hidden>

                        

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hora:</label>
                        <input type="time" class="form-control" name="hora" required hidden>

                        <br>

                        

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area medica:</label>

                        <select class="form-control" id="inlineFormCustomSelect" name = 'area_med' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        @foreach($unidades as $uni)
                        <option value = '{{$uni->nombre_area}}'>{{$uni->nombre_area}}</option>
                        @endforeach
                        </select>

                        <!--<input type="text" class="form-control" name = 'area_med' placeholder="Ej. Psycologia" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Numero de consultorio:</label>


                        <select class="form-control" id="inlineFormCustomSelect" name = 'num_consul' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        @foreach($consultorios as $consul)
                        <option value = '{{$consul->num_consul}}'>{{$consul->num_consul}}</option>
                        @endforeach
                        </select>


                        <!--<input type="text" class="form-control" name = 'num_consul' placeholder="Ej. 1" required hidden>-->

                        <br>

                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctor:</label>

                        <select class="form-control" id="inlineFormCustomSelect" name = 'doctor' required hidden>
                        <option disabled selected>Selecciona una opción</option>
                        @foreach($doctores as $doc)
                        <option value = '{{$doc->nom_doc}}'>{{$doc->nom_doc}}</option>
                        @endforeach
                        </select>

                        
        
            <!--<input list="lista" name="doctor" type="text" placeholder="Elige un doctor" class="form-control">
            <datalist id="lista" style="width: 100%px;">
                @foreach($unidades as $uni)
                        <option value = '{{$uni->nom_doc}}' label='{{$uni->nom_doc}}'>{{$uni->nom_doc}}</option>
                        @endforeach
            </datalist>-->
        
                        

                        <!--<br>

                        <input type="text" class="form-control" name = 'doctor' placeholder="Doctor" required hidden>-->

                        <br>


                        <label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asistencia :</label>
                        <input type="text" class="form-control" name = 'asistencia' value="Indef" readonly="readonly" required hidden>

                        <br>

                        

                    

                    </div>                
                    
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
</div>



































            
    
  
    @endforeach
    @endforeach
    @endif


  </body>











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