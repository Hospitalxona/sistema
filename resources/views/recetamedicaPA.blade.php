@extends('layout.master')
<html>
    <head>
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
    if ($result1) {
        while ($row1 = mysqli_fetch_array($result1)) {
            $descripcion = utf8_encode($row1['descripcion']);
            array_push($array1, $descripcion);
        }
    }
?>
<script type="text/javascript">
                        $(document).ready(function () {
                            var items = <?= json_encode($array) ?>
                            
                            $("#Nombre_M").autocomplete({
                                source: items
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            var items = <?= json_encode($array) ?>
                            
                            $("#Nombre_M2").autocomplete({
                                source: items
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            var items = <?= json_encode($array) ?>
                            
                            $("#Nombre_M3").autocomplete({
                                source: items
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            var items = <?= json_encode($array1) ?>
                            
                            $("#Clave_Diagnostico").autocomplete({
                                source: items
                            });
                        });
                    </script>
                    <script>
                        function buscar(){
                        var dato1= $("#Nombre_M").val();
                  //alert(dato1)
                            $("#resultadosmm").load('codigo?medi='+dato1).val();
                            $("#resultadosmm1").load('codigo1?medi='+dato1).val();
                            }
                    </script>@section('contenido')
    </head>
    <body>
        
        
@foreach($tre as $t)
 <center> 
    <form class="form-horizontal" action="guardarm" method='POST'>
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
                <input type="text" class="form-control" name="Folio" value="E000 000 020" readonly="">
            </td>
           <!-- <td rowspan="8" class="capceleravertical">ISEM BOTICA PROVEEDOR</td>-->
        </tr>
        
        <tr>
            <td colspan="2" style="border: none;"><input type="radio" id="tipo" value="1" name="tipo" required>ORDINARIA</td>
            <td colspan="3" style="border: none;"><input type="radio" id="tipo" value="2" name="tipo">MEDICAMENTOS CONTROLADOS GRUPO II Y III</td>
        </tr>
    
    <tr>
        
            <td colspan="" style="border: none;">
                <font size=1>NOMBRE Y CLAVE DE LA JURISDICCI&Oacute;N:</font><br><br>
                <input type="text" class="form-control" class="sinborde" name="Nom_servicio" id="" value="{{$t->nom_jurisdiccion}}" placeholder="Nombre" readonly>
                <input type="text" class="form-control" class="sinborde" size=3 name="Clave_servicio" id="" value="{{$t->jurisdiccion}}" placeholder="Clave" readonly>
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
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="1" required>&nbsp;CONSULTA EXTERNA &nbsp;
                            <input type="radio" id="Area" name="Area" value="2">&nbsp;URGENCIAS<br>
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="3">&nbsp;HOSPITALIZACI&Oacute;N
            </font>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CLAVE Y NOMBRE DEL SERVICIO:</font><br><br>
                <select name="Clave_servicio" class="form-control" required="required">
                    <option value="Cliente">1005</option>
                    <option value="Proveedor">1004</option>
                    <option value="Cliente/Proveedor">1006</option>
                </select>
                
                <input type="text" class="form-control" size="20" name="Nom_servicio" id="" value="" placeholder="Nombre" required>
            </td>
            
            <td style="border: none;">
               <font size=1> No.LICENCIA SANITARIA</font><br><br>
               <input type="text" class="form-control" name="No_licencia" id="" value="15-AM-15-115" placeholder="No.licencia" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1> COBERTURA*</font><br>
               <br>
               <font size=1>
                &nbsp;&nbsp;<input type="radio" id="cobertura" name="Cobertura" value="1" required>&nbsp;SP&nbsp;
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
               <font size=1>N&Uacute;MERO DE EXPEDIENTE Y DE AFILIACI&Oacute;N:</font><br><br>
               <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="" placeholder="Numero expediente">
               <input type="text" class="form-control" size=15 name="No_Afiliacion" id="" value="" placeholder="Numero afiliacion">
            </td>
            
            <td colspan="2" style="border: none;">
               <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font>
               <br><br>
               <div id="resultadosmm"></div>
                <input type="text" class="form-control" size=2 name="Nombre_M" id="Nombre_M" onkeyup="buscar();" placeholder="Medicamento">

               
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="Clave_Diagnostico" id="Clave_Diagnostico" value="" placeholder="Primario">
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE COMPLETO DEL PACIENTE:</font><br><br>
                <input type="text" class="form-control" size="7" name="Apellido_P" id="" value="" placeholder="A. Paterno">
                <input type="text" class="form-control" size="7" name="Apellido_M" id="" value="" placeholder="A. Materno">
                <Input type="text" class="form-control" size="7" name="Nombre" id="" value="" placeholder="Nombre(s)">
            </td>
            
            <td colspan="" style="border: none;"> 
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" size=20 name="Dosis" id="" value="" placeholder="Indicaciones" required>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion" id="" value="" placeholder="" required>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada" id="Cantidad_solicitada" value="{{old('Cantidad_solicitada')}}" placeholder="">
                @if($errors->first('Cantidad_solicitada')) 
                <i>
                    <span class="label label-danger label-rounded">{{ $errors->first('Cantidad_solicitada') }}</span>
                </i> 
                @endif
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <div id="resultadosmm1"></div>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>EDAD:</font><br><br>
                <input type="text" class="form-control" name="Edad" id="" value="" placeholder="Edad">
            </td>
            
            <td style="border: none;">
                <font size=1>G&Eacute;NERO</font>
                <br>
                <input type="text" class="form-control" size="1" name="Genero" id="" value="" placeholder="Genero">
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
                <input type="text" class="form-control" name="Clave_M2" id="" value="" placeholder="Clave">

                <input type="text" class="form-control" size=2 name="Nombre_M2" id="Nombre_M2" placeholder="Medicamento">
                </div>
            </td>
            
            <td style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="Clave_Diagnostico2" id="" value="" placeholder="Primario">
                <input type="text" class="form-control" name="" id="" value="" placeholder="Secundario">
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE DEL M&Eacute;DICO:</font><br>
                <input type="text" class="form-control" size="4" name="" id="" value="{{$t->ap_tra}}" placeholder="Apellido Paterno" readonly>
                <input type="text" class="form-control" size="4" name="" id="" value="{{$t->am_tra}}" placeholder="Apellido Materno" readonly>
                <input type="text" class="form-control" size="4" name="" id="" value="{{$t->nombre_tra}}" placeholder="Nombre medico" readonly>
                <input type="text" style="visibility:hidden;" class="form-control" size="4" name="Id_trabajador" id="{{$t->id_trabajador}}" value="" hidden>
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
                <input type="text" class="form-control" name="Cantidad_solicitada2" id="" value="" placeholder="CANTIDAD SOLICITADA">
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida2" id="" value="" placeholder="CANTIDAD SURTIDA">
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
                <input type="text" class="form-control" name="Clave_M3" id="" value="" placeholder="Clave">
                <input type="text" class="form-control" size=2 name="Nombre_M3" id="Nombre_M3" placeholder="Medicamento">
            </td>
            
            <td style="border: none;">
               <font size=1>CLAVE DEL DIAGNOSTICO(CIE-10)</font><br>
               <input type="text" class="form-control" name="Clave_Diagnostico3" id="" value="" placeholder="Primario">
                <input type="text" class="form-control" name="" id="" value="" placeholder="Secundario">
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
                <input type="text" class="form-control" name="Cantidad_solicitada3" id="" value="" placeholder="CANTIDAD SOLICITADA">
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida3" id="" value="" placeholder="CANTIDAD SURTIDA">
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
                <input type="date" class="form-control" name="Fecha_recibido">
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
  </body>
</html>@stop