@extends('layout.master')
     
     <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
     

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" /> 
<script src="{{asset('laravel/js/lib/dataTables/datatables.min.js')}}" defer>
</script>
<script>
    $(document).ready(function(){
        $('#tablaPrimario').DataTable({
            serverSide: true,
            processing: true,
            pageLength: 3,
            bAutoWidth: false,
            bLengthChange: false,
            bProcessing: true, 
            bServerSide: true,
            ajax: {
                url: '{!! route('tb.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        "columns": [                    
              { data: 'id_cie10', name: 'id_cie10', className:'center' },
              { data: 'codigo', name: 'codigo', className:'codigo'},               
              { data: 'descripcion', name: 'descripcion', className:'hidden-480' },
               
            ],			
            language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
            
            initComplete: function () {
                //Coloca los campos de busqueda en columna individual en el encabesado
                    var r = $('#tablaPrimario tfoot tr');
                    $('#tablaPrimario thead').append(r);
                ////////////////!!!!!!!!!!!!!!!!!!!!!///////////
                    this.api().columns().every(function () {
                        var column = this;
                            if (column.footer().className !== 'non_searchable') {
                        var input = document.createElement("input");
                        input.style.width = '85%';
                        $(input).appendTo($(column.footer()).empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                            }
                    });
                },
            
        });
        $('#tablaAjax').DataTable({
            serverSide: true,
            processing: true,
            pageLength: 3,
            bAutoWidth: false,
            bLengthChange: false,
            bProcessing: true, 
            bServerSide: true,
            ajax: {
                url: '{!! route('inventarios.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
            },
            "columns": [
                { data: 'id', name: 'id'},
                { data: 'medi_mat', name: 'medi_mat' },                
                { data: 'medicamento', name: 'medicamento', className:'hidden-480' },
                { data: 'existencia', name: 'existencia', className:'existencia' },
            ],				
            language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
            
            initComplete: function () {
                //Coloca los campos de busqueda en columna individual en el encabesado
                    var r = $('#tablaAjax tfoot tr');
                    $('#tablaAjax thead').append(r);
                ////////////////!!!!!!!!!!!!!!!!!!!!!///////////
                    this.api().columns().every(function () {
                        var column = this;
                            if (column.footer().className !== 'non_searchable') {
                        var input = document.createElement("input");
                        input.style.width = '85%';
                        $(input).appendTo($(column.footer()).empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                            }
                    });
                },
            
        });
    });
</script>

<script>    
$(document).ready(function(){

        var tot=0;
$(document).ready(function() {
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;       
    $("#Fecha_Elaboracion").attr("value", today);
    
    
});
});
</script>
<?php  

    $connection = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connection, "hospitalxonacatlan");
    $result = mysqli_query($connection, "SELECT * FROM minventarios");
    $array = array();
    if($result){
        while ($row = mysqli_fetch_array($result)) {
            $medicamento = utf8_encode($row['medicamento']);
            array_push($array, $medicamento); // equipos
        }
    }   
    $result1 = mysqli_query($connection, "SELECT * FROM tb_cie10");
    $array1 = array();
    if($result1){
        while ($row1 = mysqli_fetch_array($result1)) {
            $descripcion = utf8_encode($row1['descripcion']);
            array_push($array1, $descripcion);
        }
    }
?>

                   
                    <script>
                        function buscar(){
                        var dato1= $("#Nombre_M").val();
                  //alert(dato1)
                            $("#resultadosmm").load('codigo?medi='+dato1).val();
                            $("#resultadosmm1").load('codigo1?medi='+dato1).val();
                            }
                    </script> 
                    <script>
                    function solonumeros(e){
                        key=e.keyCode || e.which;
                        teclado=String.fromCharCode(key);
                        numero="0123456789";
                        especiales="8-37-38-46";
                        teclado_especial =false;
                        for(var i in especiales){
                            if(key==especiales[i]){
                                teclado_especial=true;

                            }
                        }
                       if(numero.indexOf(teclado)==-1 && !teclado_especial){
                           return false;
                       } 


                    }                    
                    </script> 

                    <script type="text/javascript">
                    $(document).ready(function () {
                     folio=$("#idrs").val();
                     tamaño=folio.length;
                     console.log(tamaño);
                     resta =(9-Number(tamaño));
                     console.log(resta);
                     var cadena ="";
                     for (x  = 0; x < resta; x++) {
                         console.log(cadena);
                         if (x === 3 || x == 6) {
                         cadena += " ";
                         }
                         cadena += "0";
                     }
                     gfolio = "E"+ cadena+folio; 
                       console.log(gfolio); 
                    $("#gfolio").val(gfolio);
                    });
                    </script>


@section('contenido')
 

<body id="p_body">

        
@if($res->isEmpty()) 
<h2 align='center'>Lo sentimos, el expediente que busca no existe.</h2>   <br>
<img src="{{asset('laravel/img/triste.png')}}" width="100" height="100">
@else
@foreach($tre as $t)
@foreach($res as $r)
<center> 
<form class="form-horizontal" action="{{route('guardarm')}}" method='POST'>
{{csrf_field()}}

<table style="border-collapse: collapse" WIDTH="1000" border="1" cellspacing="0" cellpadding="10">
<tr>
    <td colspan="2.5" style="border: none;">
        <img  width=120 height=32  VSPACE="20"src="{{asset('RecetaM/image006.jpg')}}" v:shapes="_x0000_s1027">Gobierno de estado de mexico
    </td>
    <td colspan="3" style="border: none;">
                <img width=80 HSPACE="30" height=46 VSPACE="20" src="{{asset('RecetaM/image005.gif')}}" v:shapes="_x0000_s1026">ISEM
    </td>
</tr>

<tr>
    <td colspan="2" style="border: none;"><b>Receta M&eacute;dica</b></td>
    <td colspan="3" style="border: none;">
        <b>FOLIO</b><br>
        <input type="text" class="form-control" name="idjReceta"  placeholder="FOLIO" readonly="" >
        <input type="text" class="form-control" name="idReceta" value="{{$idrs}}" id="idrs" readonly="" style="display:none">

            <input type="text" class="form-control" name="Folio" id="gfolio" readonly="" style="display:none" >
    </td>
   <!-- <td rowspan="8" class="capceleravertical">ISEM BOTICA PROVEEDOR</td>-->
</tr>

<tr>
    <td colspan="2" style="border: none;"><input type="radio" id="tipo" value="1" name="tipo" required checked>ORDINARIA</td>
    <td colspan="3" style="border: none;"><input type="radio" id="tipo" value="2" name="tipo">MEDICAMENTOS CONTROLADOS GRUPO II Y III</td>
</tr>

<tr>

    <td colspan="" style="border: none;">
        <font size=1>NOMBRE Y CLAVE DE LA JURISDICCI&Oacute;N:</font><br><br>
            <input type="text" class="form-control" class="sinborde" name="" id="" value="{{$t->nom_jurisdiccion}}" placeholder="Nombre" readonly>
        <input type="text" class="form-control" class="sinborde" size=3 name="" id="" value="{{$t->jurisdiccion}}" placeholder="Clave" readonly>
    </td>
    
    <td colspan="3" style="border: none;">
       <font size=1> NOMBRE Y CLAVE DE LA UNIDAD M&Eacute;DICA:</font><br><br>
       <input type="text" class="form-control" size=50 name="" id="" value="{{$t->nom_unidad}}" placeholder="Nombre" readonly>
       <input type="text" class="form-control" size=15 name="" id="" value="{{$t->clues}}" placeholder="Clave" readonly>
       <input type="text" style="visibility:hidden;" class="form-control" size=50 name="Id_unidad" id="" value="{{$t->id_unidad}}" hidden>
    </td>
    
    <td colspan="" style="border: none;">
        <font size=1>DOMICILIO DE LA UNIDAD M&Eacute;DICA:</font><br><br>
        <input type="text" class="form-control" size=40 name="" id="" value="{{$t->calle}}" placeholder="Direccion" readonly>
        <input type="text" class="form-control" size=40 name="" id="" value="{{$t->nom_localidad}}" placeholder="Localidad" readonly>
    </td>
</tr>

<tr>
<td style="border: none;">
    
    
<font size=1>
            
            &nbsp;&nbsp;<input type="radio" id="con_ext"  name="Nom_servicio"  value="2" onclick="seleccionRadio(1)">&nbsp;CONSULTA EXTERNA &nbsp;
                        <input type="radio"  id="urgencias" name="Nom_servicio" value="1"  onclick="seleccionRadio(2)">&nbsp;URGENCIAS<br>
            &nbsp;&nbsp;<input type="radio" id="h" name="Nom_servicio" value="3" onclick="seleccionRadio(3)">&nbsp;HOSPITALIZACION

            @if($t->area == 'Consulta Externa')
            <script type="text/javascript">
                $("#con_ext").attr("checked",true);
            </script>

            @elseif($t->area == 'Hospitalizacion')
            <script type="text/javascript">
                $("#h").attr("checked",true);
            </script>
            @else
            <script type="text/javascript">
                $("#urgencias").attr("checked",true);
            </script>
            @endif
            {{-- 
            <input type="text" class="form-control" size="1" name="Area" id="p_area" readonly hidden="" style="display:none;"> --}}
            {{-- <input type="text" class="form-control" size="1" id="p_auxiliar" val="{{$t->area}}" readonly hidden="" style="display:none;"> --}}
        </font>

        </td>
        
    
    <td colspan="" style="border: none;">
        <font size=1>NOMBRE DEL SERVICIO:</font><br><br>
       
        
        <input type="text" class="form-control" size="20" id="clave_serv" name="Clave_servicio" placeholder="Clave_servicio" readonly>
    </td>
    
    <td style="border: none;">
       <font size=1> No.LICENCIA SANITARIA</font><br><br>
       <input type="text" class="form-control" name="No_licencia" id="" value="15-AM-151-150-001" placeholder="No.licencia" readonly>
    </td>
    
    <td style="border: none;">
       <font size=1> COBERTURA*</font><br>
       <br>
       <font size=1>
        &nbsp;&nbsp;<input type="radio" id="cobertura" name="Cobertura" value="1"checked required>&nbsp;SP&nbsp;
        <input type="radio" id="cobertura" name="Cobertura" value="2">&nbsp;PA&nbsp;
        <input type="radio" id="cobertura" name="Cobertura" value="3">&nbsp;OP&nbsp;
        </font>
    </td>
    
    <td style="border: none;">
        <font size=1>FECHA DE ELABORACI&Oacute;N:</font><br><br>
        <input type="date" class="form-control" name="Fecha_Elaboracion" id="Fecha_Elaboracion" value="" readonly>
    </td>
    
</tr>

<tr>
    <td style="border: none;">
       <font size=1>N&Uacute;MERO DE EXPEDIENTE:</font><br><br>
       <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="{{$r->expediente}}" placeholder="Numero expediente" readonly>
       <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="{{$r->id_expediente}}" placeholder="Numero expediente" readonly  style="visibility:hidden;">
       <font size=1>N&Uacute;MERO DE AFILIACION:</font><br>
       <input type="text" class="form-control" size=15 name="No_Afiliacion" id="" value="{{$r->num_afiliacion}}" placeholder="Numero afiliacion" readonly>
    </td>
    
    <td colspan="2" style="border: none;">
          
        <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
        <input type="text" class="form-control openBtn" size=2 name="Nombre_M" id="Nombre_M1" placeholder="Medicamento" style="cursor:pointer" onclick="muestraModal(1)">
        
        </td>
        
    
    <td colspan="2" style="border: none;">
            <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
            <input type="text" class="form-control openBtn" size=2 name="Clave_Diagnostico" id="Primario1" placeholder="Primario" style="cursor:pointer" onclick="muestraModal1(1)">
        
    </td>
    
</tr>

<tr>
    <td style="border: none;">
        <font size=1>NOMBRE COMPLETO DEL PACIENTE:</font><br><br>
        <input type="text" class="form-control" size="7" name="Apellido_P" id="" value="{{$r->ap_paciente}}" placeholder="A. Paterno" readonly>
        <input type="text" class="form-control" size="7" name="Apellido_M" id="" value="{{$r->am_paciente}}" placeholder="A. Materno" readonly>
        <Input type="text" class="form-control" size="7" name="Nombre" id="" value="{{$r->nom_paciente}}" placeholder="Nombre(s)" readonly>
    </td>
    
    <td colspan="" style="border: none;"> 
        <font size=1>INDICACIONES(DOSIS)</font><br>
        <input type="text" class="form-control" size=20 name="Dosis" id="" value="" placeholder="Indicaciones" required>
    </td>
    
    <td colspan="" style="border: none;">
        <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
        <input type="text" class="form-control" name="Duracion" id="" value="" placeholder="Duracion" required>
    </td>
    
    <td colspan="" style="border: none;">
        <font size=1>CANTIDAD SOLICITADA</font><br>
        <input type="text" class="form-control" name="Cantidad_solicitada" id="" value=""  placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">

        <!-- <input type="text" class="form-control" name="Cantidad_solicitada"value="{{old('Cantidad_solicitada')}}" placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">
        @if($errors->first('Cantidad_solicitada')) 
        <i>
            <span class="label label-danger label-rounded">{{ $errors->first('Cantidad_solicitada') }}</span>
        </i> 
        @endif -->
    </td>
    
    <td style="border: none;">
        <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
        <input type="text" class="form-control" name="Cantidad_surtida" id="Cantidad_surtida"  placeholder="CANTIDAD SURTIDA " readonly>
        <div id="resultadosmm1"></div>
    </td>
    
</tr>

<tr>
    <td style="border: none;">
        <font size=1>EDAD:</font><br><br>
        <input type="text" class="form-control"  id="p_fechaNacimiento" value="{{$r->fecha_nacimiento}}" style="display:none"  readonly  hidden="">
        <input type="text" class="form-control"  name="Edad" id="Edad"readonly>

        <script type="text/javascript">
            $(document).ready(function () {
                FechaNacimiento=$("#p_fechaNacimiento").val();
                console.log(FechaNacimiento);
                // FechaNacimiento="1996-09-17";
                var fechaNace = new Date(FechaNacimiento);
                var fechaActual = new Date()
                var mes = fechaActual.getMonth();
                var dia = fechaActual.getDate();
                var año = fechaActual.getFullYear();
                fechaActual.setDate(dia);
                fechaActual.setMonth(mes);
                fechaActual.setFullYear(año);
                edad = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));
                $("#Edad").val(edad);     
            });
        </script>
        
    </td>
    
    <td style="border: none;">
        <font size=1>G&Eacute;NERO</font>
        <br>
        <input type="radio" name="gender" id="femenino">F <br>  
        <input type="radio" name="gender" id="masculino">M <br>  
        <input type="text" class="form-control" size="1" name="Genero" id="" value="{{$r->sexo}}" placeholder="Genero" readonly style="display:none">

        @if($r->sexo == 'F')
        <script type="text/javascript">
            $("#femenino").attr("checked",true);
        </script>
        @else
        <script type="text/javascript">
            $("#masculino").attr("checked",true);
        </script>
        @endif
    </td>
    
    <td colspan="2" style="border: none;">
            <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
            <input type="text" class="form-control" size=2 name="Nombre_M2" id="Nombre_M2" placeholder="Medicamento" style="cursor:pointer" onclick="muestraModal(2)">
    </td>
    
    <td style="border: none;">
        
            <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
            <input type="text" class="form-control" size=2 name="Clave_Diagnostico2" id="Primario2" placeholder="primario" style="cursor:pointer" onclick="muestraModal1(2)">

    </td>
</tr>

<tr>
    <td style="border: none;">
        <font size=1>NOMBRE DEL M&Eacute;DICO:</font><br>
        <input type="text" class="form-control" size="4" name="" id="" value="{{$t->ap_tra}}" placeholder="Apellido Paterno" readonly>
        <input type="text" class="form-control" size="4" name="" id="" value="{{$t->am_tra}}" placeholder="Apellido Materno" readonly>
        <input type="text" class="form-control" size="4" name="" id="" value="{{$t->nombre_tra}}" placeholder="Nombre medico" readonly>
        <!-- <input type="text" class="form-control" size="4" name="Id_trabajador" value="{{$t->id_trabajador}}" > -->
    </td>
    
    <td style="border: none;">
        <font size=1>INDICACIONES(DOSIS)</font><br>
        <input type="text" class="form-control" name="Dosis2" id="" value="" placeholder="INDICACIONES">
    </td>
    
    <td style="border: none;">
        <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
        <input type="text" class="form-control" name="Duracion2" id="" value="" placeholder="Duracion">
    </td>
    
    <td style="border: none;">
        <font size=1>CANTIDAD SOLICITADA</font><br>
        <input type="text" class="form-control" name="Cantidad_solicitada2" id="" value=""  placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">
    </td>
    
    <td style="border: none;">
        <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
        <input type="text" class="form-control" name="Cantidad_surtida2" id="" value="" placeholder="CANTIDAD SURTIDA" readonly placeholder="CANTIDAD SURTIDA" onkeypress="return solonumeros(event)">
    </td>
</tr>

<tr>
    <td style="border: none;">
        <font size=1>R.F.C:</font><br>
        <input type="text" class="form-control" name="" id="" value="{{$t->rfc}}" placeholder="R.F.C" readonly>
    </td>
    
    <td style="border: none;">
        <font size=1>N&Uacute;M. DE CED. PROFES.</font><br>
        <input type="text" class="form-control" name="" id="" value="{{$t->cedula_profesional}}" placeholder="" readonly>
    </td>
    
    <td colspan="2" style="border: none;">
            <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
            <input type="text" class="form-control" size=2 name="Nombre_M3" id="Nombre_M3" placeholder="Medicamento" style="cursor:pointer" onclick="muestraModal(3 )">
           
        </td>
    
    <td style="border: none;">
            <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
            <input type="text" class="form-control" size=2 name="Clave_Diagnostico3" id="Primario3" placeholder="Primario" style="cursor:pointer" onclick="muestraModal1(3)">

    </td>
</tr>

<tr>
    <td style="border: none;"> 
        <font size=1>FIRMA DEL M&Eacute;DICO:</font><br>
        <input type="text" class="form-control" name="" id="" value="" placeholder="Firma medico" readonly>
    </td>
    
    <td style="border: none;">
        <font size=1>INDICACIONES(DOSIS)</font><br>
        <input type="text" class="form-control" name="Dosis3" id="" value="" placeholder="INDICACIONES">
    </td>
    
    <td style="border: none;">
        <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
        <input type="text" class="form-control" name="Duracion3" id="" value="" placeholder="Duracion tratatmieno">
    </td>
    
    <td style="border: none;">
        <font size=1>CANTIDAD SOLICITADA</font><br>
        <input type="text" class="form-control" name="Cantidad_solicitada3" id="" value="" placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">
    </td>
    
    <td style="border: none;">
        <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
        <input type="text" class="form-control" name="Cantidad_surtida3" id="" value="" placeholder="CANTIDAD SURTIDA" readonly>
    </td>
</tr>

<tr>
    <td style="border: none;">
        <font size=1><b>EL PACIENTECUENTA CON 48 HORAS PARA CANJEAR LA PRESENTE RECETA</b></font>
    </td>
    
    <td style="border: none;">
        <font size=1>FIRMA DE RECIBIDO DE CONFORMIDAD</font>
    </td>
    
    <td style="border: none;"> <p class=MsoNormal style='margin-top:1.0pt'><span lang=ES style='font-size: 6.0pt;font-family:"Arial",sans-serif'>ENTREGU&Eacute;<o:p></o:p><br><p class=MsoNormal align=right style='text-align:right'><span lang=ES>
        <input type="text" class="form-control" name="Ent_cajas" placeholder="Cantidad:" readonly>CAJAS</span></p>
    </td>
    
    <td style="border: none;"> <p class=MsoNormal style='margin-top:1.0pt'><span lang=ES style='font-size: 6.0pt;font-family:"Arial",sans-serif'>RECIB&Iacute;<o:p></o:p><br><p class=MsoNormal align=right style='text-align:right'><span lang=ES>
        <input type="text" class="form-control" name="Recibi_cajas" placeholder="Cantidad:" readonly>CAJAS</span></p>
    </td>
    
    <td style="border: none;">
        <font size=1>FECHA DE RECIBIDO</font><br>
        <input type="text" class="form-control" name="" readonly="">
    </td>
</tr>

<tr>
    <td colspan="5" style="border: none;">
    <font size=1>
        *SP=SEGURO POPULAR PA=POBLACI&Oacute;N ABIERTA OP=OPORTUNIDADES <b>&nbsp;&nbsp;ESTA RECETA NO EST&Aacute; AUTORIZADA PARA PRESCRIPCI&Oacute;N DE 
        ESTUPEFACIENTES</b><br>
        <b>NOTA IMPORTANTE:</b> EN CASO DE QUE NO SE CUENTE CON ALGUNO DE LOS MEDICAMENTOS, EL PROVEEDOR TENDRÁ 60 
        MINUTOS PARA SURTIR LA RECETA TOTALMENTE</font>s
    </td>
</tr>
<tr>
    <td>
        <input type="submit" class="btn btn-primary btn-lg nover" value="Guardar" id="Guardar" />
    </td>
    <td>
        <!--<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir">-->
    </td>
    <td>
        <input value="Limpiar" onclick="history.go(0)" type="button" class="btn btn-warning btn-lg nover">
    </td>
    <td>
        <a href="{{URL::action('crecetamedica@principalrm')}}"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /></a>
    </td>
</tr>
</table>
</center>
@endforeach
@endforeach
@endif
<!-- Modal -->
<div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: 800px;left: -42px;">
                <div class="modal-header" id="p_headerMedicamento">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h2 class="modal-title">Tabla de Medicamentos</h2>
                </div>
                <div class="modal-body">
                    <table id="tablaAjax" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Nombre Medicamento</th>
                                    <th>Existencia</th>
                                </tr>
                            </thead>
                        <tfoot>
                            <tr>
                                <td class="non_searchable"></td>
                                <td></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                        </tfoot>
                        </table>
                </div>
                <label for="comentario">¿Que presentacion no se encontro?</label><br>
                <input type="text" style="width: 30%;height: 5%;" name="codigo" placeholder="Ingrese codigo." id="codigo">
                <input type="text" style="width: 45%;height: 5%;" name="newmedicamento" placeholder="Ingrese medicamento." id="newmedicamento" >
                <br>
                <br>
                <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="tecla(1)">Agregar</button>
                <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="tecla(2)">Agregar a inventario</button>
                <span id="p_mensaje1" hidden=""><strong>¡Guardado en la base!</strong></span>
                
                <div class="modal-footer" id="p_footerMedicamento">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal cuando existencia es == 0 -->
    <div class="modal" id="myModalAlert" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="width: 800px;left: -42px;">
                <div class="modal-header" id="p_headerAlert">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h2 class="modal-title">Tabla de Medicamentos</h2>
                </div>
                <div class="modal-body" id="p_texto">
                </div>
                <div class="modal-footer" id="p_footerAlert">
                    <!-- <ul ><li>¡Correo Enviado!</li></ul> -->
                    <span id="p_mensaje" hidden="">¡Correo Enviado Correctamente!</span>
                    <input type="text" name="p_nombreM" id="p_nombreM" hidden=""> 
                    <input type="button" class="btn btn-success" value="Agrega/Enviar Correo" id="boton" onclick="addBoton()">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="p_cancelar">Cancelar</button> 
                </div>
            </div>
        </div>
    </div>

<script>

$(document).ready(function () {
    var table = $('#tablaAjax').DataTable();//Guarda en variable datatable
    $('#tablaAjax tbody').on('click', 'tr', function () {/*Agrega evento onclick a los tr de la datatable y realiza siguientes acciones:*/
        table.ajax.reload();/*Refresca el datatable para que muestre datos iniciales */
        table.search("").columns().search("").draw();
        texto = $(this).find(".hidden-480").text();/* Obtiene el texto que selecciono  */
        medi_mat = $(this).find(".medi_mat").text();
        numeroInput = $('#tablaAjax').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
        existe = $(this).find(".existencia").text();
        existe = Number(existe)
        if (existe == 0) {
            $("#myModalAlert").show();
            $("#p_texto").html("El medicamento " + texto + " ya no hay en existencia" + "<hr>" + "¿DESEA AGREGARLO?");
            $("#p_nombreM").val(medi_mat + "." + texto).attr("data-id",numeroInput);

            /*Agrega el click en acpetar u cierra modal y agrega el texto en la caja */
            $("#p_agregaMedi").click(function () {
                $('#myModal').hide();//Oculta ventana
                $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      
            });
            /*Agrega el click en cancelar y cierra alert */
            $("#p_cancelar").click(function () {
                $('#myModalAlert').hide();//Oculta ventana
            });

        } else {
            $('#myModal').hide();//Oculta ventana
            $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      

        }

    });

    $("#tablaAjax tbody").on("mouseenter", "tr", function () {
        $('#tablaAjax tbody').on('mouseenter', 'tr', function () {
            existe = $(this).find(".existencia").text();
            existe = Number(existe);
            if (existe == 0)
                $(this).css("background-color", "rgb(220, 53, 69, 0.3)");
        });
        $('#tablaAjax tbody').on("mouseleave", "tr", function () {
            $(this).removeAttr("style");
        });
        
    });

    $("#tablaAjax tbody").on("mouseleave", "tr", function () {
        $(this).removeAttr("style");
    });

    $('#p_headerMedicamento,#p_footerMedicamento').on('click', 'button', function () {
        table.ajax.reload();
        table.search("").columns().search("").draw();
        $('#myModal').hide();
    });
    $('#p_footerAlert,#p_headerAlert').on('click', 'button', function () {
        $('#myModalAlert').hide();
    });
});

function muestraModal(cajaId) {
    /*Funcion muestraModal(): Se ejecuta cuando se da click en el input y tiene un dato de entrada que es 1,2,3 dependiendo el input que seleccione*/
    $('#myModal').show();//Muestra la ventana
    $('#tablaAjax').attr("data-caja", cajaId); //Coloca atributo data-caja dependiendo el input
}




function tecla(event) {
    var newmedicamento = $("#newmedicamento").val();
    var codigo = $("#codigo").val();
    if(codigo == "")codigo = "null";

    if (event ==1) { //13 = ENTER
        $('#myModal').hide();//Oculta la ventana
        numeroInput = $('#tablaAjax').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
        $("#Nombre_M" + numeroInput).val(codigo+"."+newmedicamento);//Coloca a input el texto que selecciona usuario      
        $("#newmedicamento,#codigo").val("");      
              
    }else if(event ==2){

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: "{{URL::route('guardamedicamento')}}",
            data: {
                newmedicamento: newmedicamento,
                codigo: codigo
            },
            success: function(response) {
                $("#p_mensaje1").css({"border-radius":".5em","padding":"0.7rem 0.8rem 0.7rem 0.8rem","background-color":" rgba(213, 243, 162, 0.69)","border":" 2px solid #c7e09e","margin-left":"1rem"}).show();
                setTimeout(function(){
                    $('#myModal').hide();//Oculta la ventana
                    numeroInput = $('#tablaAjax').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
                    $("#Nombre_M" + numeroInput).val(codigo+"."+newmedicamento);//Coloca a input el texto que selecciona usuario      
                    $("#newmedicamento,#codigo").val("");   
                    $("#p_mensaje1").hide().removeAttr("style");
                },1000);                
            }
        }); 
    }
}









/*Agregar Funcion */
function addBoton(){
    var p_nombreM = $("#p_nombreM").val();
    nombreMedica1=$("#Nombre_M1").val();
    nombreMedica2=$("#Nombre_M2").val();
    nombreMedica3=$("#Nombre_M3").val();

    if($("#p_nombreM").attr("data-id") == 1){
        if(p_nombreM == nombreMedica2 || p_nombreM == nombreMedica3){
            $('#myModal,#myModalAlert,#p_mensaje').hide();//Oculta ventana
            $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      
        }else{
            generaAjax();
        }
    }

    if($("#p_nombreM").attr("data-id") == 2){
        if(p_nombreM == nombreMedica1 || p_nombreM == nombreMedica3){
            $('#myModal,#myModalAlert,#p_mensaje').hide();//Oculta ventana
            $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      
        }else{
            generaAjax();
        }
    }

    if($("#p_nombreM").attr("data-id") == 3){
        if(p_nombreM == nombreMedica1 || p_nombreM == nombreMedica2){
            $('#myModal,#myModalAlert,#p_mensaje').hide();//Oculta ventana
            $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      
        }else{
            generaAjax()
        }
    }

    function generaAjax(){
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: "{{URL::route('enviaAviso')}}",
            data: {p_nombreM: p_nombreM},
            success: function(response) {
                $("#p_mensaje").show();
                setTimeout(function () {
                    $('#myModal,#myModalAlert,#p_mensaje').hide();//Oculta ventana
                    $("#Nombre_M" + numeroInput).val(medi_mat + "." + texto);//Coloca a input el texto que selecciona usuario      
                }, 2000);
            }
        });  
        
    } 
}

</script>


<!-- Modal2 -->
<div class="modal" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="width: 800px;left: -42px;">
            <div class="modal-header" id="p_headerPrimario">
                <button type="button" class="close" data-dismiss="modal"">x</button>
                <h4 class="modal-title"> Busqueda de Diagnosticos (CIE-10).</h4>
            </div>
            <div class="modal-body">
                <table id="tablaPrimario" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                    <tfoot>
                        <tr>
                            <td class="non_searchable"></td>
                            <td></td>
                            <td ></td>
                        </tr>
                    </tfoot>
                    </table>
            </div>
            <label for="comentario">¿Que enfermedad no se encontro?</label>
                <br>

                <input type="text" style="width: 30%;height: 5%;" name="codigoE" placeholder="Ingrese codigo." id="codigoE">
                <input type="text" style="width: 45%;height: 5%;" name="newEnfermedad" placeholder="Ingrese medicamento." id="newEnfermedad" >
                <br>
                <br>
                <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="tecla2(1)">Agregar</button>
                <button type="button"  class="btn btn-primary" data-dismiss="modal" onclick="tecla2(2)">Agregar a inventario</button>
                <span id="p_mensaje2" hidden=""><strong>¡Guardado en la base!</strong></span>
                
            <div class="modal-footer" id="p_footerPrimario">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    var table1 = $('#tablaPrimario').DataTable();//Guarda en variable datatable
    $('#tablaPrimario tbody').on('click', 'tr', function () {/*Agrega evento onclick a los tr de la datatable y realiza siguientes acciones:*/
        table1.ajax.reload();/*Refresca el datatable para que muestre datos iniciales */
        table1.search("").columns().search("").draw();
        texto = $(this).find(".hidden-480").text();/* Obtiene el texto que selecciono  */
        codigo = $(this).find(".codigo").text();/* Obtiene el codigo que selecciono  */

        numeroInput = $('#tablaPrimario').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
        $('#myModal1').hide();//Oculta ventana
        $("#Primario" + numeroInput).val(codigo + "." + texto);//Coloca a input el texto que selecciona usuario

    });
    $('#p_headerPrimario,#p_footerPrimario').on('click', 'button', function () {
        table1.ajax.reload();
        table1.search("").columns().search("").draw();
        $('#myModal1').hide();
    });

});

function muestraModal1(cajaId) {
    /*Funcion 1(): Se ejecuta cuando se da click en el input y tiene un dato de entrada que es 1,2,3 dependiendo el input que seleccione*/
    $('#myModal1').show();//Muestra la ventana
    $('#tablaPrimario').attr("data-caja", cajaId); //Coloca atributo data-caja dependiendo el input
}








function tecla2(event) {

    var newEnfermedad = $("#newEnfermedad").val();
    var codigoE = $("#codigoE").val(); 
    if(codigoE == "")codigoE = "null";

    if (event ==1) { //13 = ENTER
        $('#myModal1').hide();//Oculta la ventana
        numeroInput = $('#tablaPrimario').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
        $("#Primario" + numeroInput).val(codigoE+"."+newEnfermedad);//Coloca a input el texto que selecciona usuario      
        $("#newEnfermedad,#codigoE").val("");      
              
    }else if(event ==2){

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "POST",
            url: "{{URL::route('guardaenfermedad')}}",
            data: {
                newEnfermedad: newEnfermedad,
                codigoE: codigoE
            },
            success: function(response) {
                $("#p_mensaje2").css({"border-radius":".5em","padding":"0.7rem 0.8rem 0.7rem 0.8rem","background-color":" rgba(213, 243, 162, 0.69)","border":" 2px solid #c7e09e","margin-left":"1rem"}).show();
                setTimeout(function(){
                    $('#myModal1').hide();//Oculta la ventana
                    numeroInput = $('#tablaPrimario').attr("data-caja");/*Guarda en variable el atributo data-caja(1 o 2 o 3) depende a cual caja de texto selecciona */
                    $("#Primario" + numeroInput).val(codigoE+"."+newEnfermedad);//Coloca a input el texto que selecciona usuario      
                    $("#newEnfermedad,#codigoE").val("");   
                    $("#p_mensaje2").hide().removeAttr("style");
                },1000);                
            }
        }); 
    }
}
function seleccionRadio(numopcion){
    if(numopcion == 1){
        $("#clave_serv").val("1005");
    }else if(numopcion == 2){
        $("#clave_serv").val("1006");
    }else{
        $("#clave_serv").val("1007");
    }
}

</script>
  </body>
  
  @stop