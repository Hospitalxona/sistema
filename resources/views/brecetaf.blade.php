@extends('layout.master')
@section('receta_medica')
<html>
    <head>
	@foreach($recetas_medicas as $e)
    @foreach($receta as $r)
   
	<script>
	function add(){
		$("tr:nth-child(8)").append("<td>Motivo 1 <input type='text' name='motivo' value='{{$e->motivo}}' readonly></td>");
		$("tr:nth-child(10)").append("<td>Motivo 2 <input type='text' name='motivo2' value='{{$e->motivo2}}' readonly></td>");
		$("tr:nth-child(12)").append("<td>Motivo 3 <input type='text' name='motivo3' value='{{$e->motivo3}}' readonly></td>");
	}
	</script>
    <body>
  
  
 <center> 

    <form class="form-horizontal" action= "{{route('modimotivo2')}}" method='POST'>
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
		<td style="border: none;">
		<input type="text" name="Id_receta" value="{{$e->Id_receta}}" hidden>
		</td>
		</tr>
		
        <tr>
            <td colspan="2" style="border: none;"><b>Receta M&eacute;dica</b></td>
            <td colspan="3" style="border: none;">
                <b>FOLIO</b><br>
                <input type="text" class="form-control" name="Folio" value="{{$e->Folio}}" readonly="">
            </td>
           <!-- <td rowspan="8" class="capceleravertical">ISEM BOTICA PROVEEDOR</td>-->
        </tr>
       
        <tr>
            <td colspan="2" style="border: none;"><input type="radio" id="ordinariamedicamentoscontrolados" value="1" name="ordinariamedicamentoscontrolados" @if ($e->ordinariamedicamentoscontrolados=='1') echo checked="checked"; @endif/>ORDINARIA</td>
            <td colspan="3" style="border: none;"><input type="radio" id="ordinariamedicamentoscontrolados" value="2" name="ordinariamedicamentoscontrolados" @if ($e->ordinariamedicamentoscontrolados=='2') echo checked="checked"; @endif/>MEDICAMENTOS CONTROLADOS GRUPO II Y III</td>
        </tr>
    <tr>
        
            <td colspan="" style="border: none;">
                <font size=1>NOMBRE Y CLAVE DE LA JURISDICCI&Oacute;N:</font><br><br>
                <input type="text" class="form-control" class="sinborde" name="Nom_servicio" id="" value="{{$e->jurisdiccion}}" readonly>
                <input type="text" class="form-control" class="sinborde" size=3 name="Clave_servicio" id="" value="{{$e->nom_jurisdiccion}}" readonly>
            </td>
            
            <td colspan="3" style="border: none;">
               <font size=1> NOMBRE Y CLAVE DE LA UNIDAD M&Eacute;DICA:</font><br><br>
               <input type="text" class="form-control" size=50 name="clues" id="" value="{{$e->clues}}" placeholder="Nombre" readonly>
               <input type="text" class="form-control" size=15 name="nom_unidad" id="" value="{{$e->nom_unidad}}" placeholder="Clave" readonly>
               <input type="text" style="visibility:hidden;" class="form-control" size=50 name="Id_unidad" id="" value="{{$e->id_unidad}}" placeholder="Nombre" hidden>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DOMICILIO DE LA UNIDAD M&Eacute;DICA:</font><br><br>
                <input type="text" class="form-control" size=40 name="" id="" value="{{$e->nom_localidad}}" readonly>
                <input type="text" class="form-control" size=40 name="" id="" value="{{$e->calle}}" readonly>
            </td>
        </tr>
        <tr>  
            <td style="border: none;">
            <font size=1>
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="1" @if ($e->Area=='1') echo checked="checked"; @endif/>&nbsp;CONSULTA EXTERNA &nbsp;
                <input type="radio" id="Area" name="Area" value="2" @if ($e->Area=='2') echo checked="checked"; @endif/>&nbsp;URGENCIAS<br>
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="3" @if ($e->Area=='3') echo checked="checked"; @endif/>&nbsp;HOSPITALIZACI&Oacute;N
            </font>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CLAVE Y NOMBRE DEL SERVICIO:</font><br><br>
                <input type="text" class="form-control" size="5" name="Clave_servicio" id="" value="{{$e->Clave_servicio}}" placeholder="Clave" readonly>
                <input type="text" class="form-control" size="20" name="Nom_servicio" id="" value="{{$e->Nom_servicio}}" placeholder="Nombre" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1> No.LICENCIA SANITARIA</font><br><br>
               <input type="text" class="form-control" name="No_licencia" id="" value="{{$e->No_licencia}}" placeholder="No.licencia" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1> COBERTURA*</font><br>
               <br>
               <font size=1>
                &nbsp;&nbsp;<input type="radio" id="Cobertura" name="Cobertura" value="1" @if ($e->Cobertura=='1') echo checked="checked"; @endif/>&nbsp;SP&nbsp;
                <input type="radio" id="Cobertura" name="Cobertura" value="2" @if ($e->Cobertura=='2') echo checked="checked"; @endif / >&nbsp;PA&nbsp;
                <input type="radio" id="Cobertura" name="Cobertura" value="3" @if ($e->Cobertura=='3') echo checked="checked"; @endif />&nbsp;OP&nbsp;
                </font>
            </td>
            
            <td style="border: none;">
                <font size=1>FECHA DE ELABORACI&Oacute;N:</font><br><br>
                <input type="date" class="form-control" name="Fecha_Elaboracion" id="Fecha_Elaboracion" value="{{$e->Fecha_Elaboracion}}" readonly>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
               <font size=1>N&Uacute;MERO DE EXPEDIENTE Y DE AFILIACI&Oacute;N:</font><br><br>
               <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="{{$e->Id_expediente}}" placeholder="Numero expediente" readonly>
               <input type="text" class="form-control" size=15 name="No_Afiliacion" id="" value="{{$e->No_Afiliacion}}" placeholder="Numero afiliacion" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
               <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br><br>
              <!-- <input type="text" class="form-control" size=2 name="Clave_M" id="" value="{{$e->Clave_M}}" placeholder="Clave" -->readonly>
               <input type="text" class="form-control" size=50 name="Nombre_M" id="" value="{{$e->Nombre_M}}" placeholder="Nombre" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Primario" readonly>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE COMPLETO DEL PACIENTE:</font><br><br>
                <input type="text" class="form-control" size="7" name="Apellido_P" id="" value="{{$e->Apellido_P}}" placeholder="A. Paterno" readonly>
                <input type="text" class="form-control" size="7" name="Apellido_M" id="" value="{{$e->Apellido_M}}" placeholder="A. Materno" readonly>
                <Input type="text" class="form-control" size="7" name="Nombre" id="" value="{{$e->Nombre}}" placeholder="Nombre(s)" readonly>
            </td>
            
            <td colspan="" style="border: none;"> 
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" size=20 name="Dosis" id="" value="{{$e->Dosis}}" placeholder="Indicaciones" readonly>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion" id="" value="{{$e->Duracion}}" readonly>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada" id="" value="{{$e->Cantidad_solicitada}}" readonly>
            </td>
            
            <td style="border: none;" id="motivo">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida" id="Cantidad_surtida" value="{{$e->Cantidad_surtida}}"><br>
				<center>
				<button type="button" class="btn btn-primary pull-right" onclick="add();">Mostrar</button>
				<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Motivo</a>
			</center>
            </td>
            @include('create')
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>EDAD:</font><br><br>
                <input type="text" class="form-control" name="Edad" id="" value="{{$e->Edad}}" placeholder="Edad" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>G&Eacute;NERO</font>
                <br>
                <input type="text" class="form-control" size="1" name="Genero" id="" value="{{$e->Genero}}" placeholder="Genero" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
              <!--  <input type="text" class="form-control" name="Clave_M2" id="" value="{{$e->Clave_M2}}" readonly>-->
                <input type="text" class="form-control" name="Nombre_M2" id="" value="{{$e->Nombre_M2}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Primario" readonly>
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE DEL M&Eacute;DICO:</font><br>
				<input type="text" class="form-control" size="" name="Id_trabajador"style="visibility:hidden;"  id="" value="{{$e->id_trabajador}}" hidden>
                <input type="text" class="form-control" size="4" name="ap_tra" id="" value="{{$e->ap_tra}}" placeholder="Apellido Paterno" readonly>
                <input type="text" class="form-control" size="4" name="am_tra" id="" value="{{$e->am_tra}}" placeholder="Apellido Materno" readonly>
                <input type="text"  class="form-control" size="4" name="nombre_tra" id="" value="{{$e->nombre_tra}}" placeholder="Nombre medico" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" name="Dosis2" id="" value="{{$e->Dosis2}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion2" id="" value="{{$e->Duracion2}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada2" id="" value="{{$e->Cantidad_solicitada2}}" readonly>
            </td>
            
            <td style="border: none;" id="motivo2">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida2" id="" value="{{$e->Cantidad_surtida2}}">
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>R.F.C:</font><br>
                <input type="text" class="form-control" name="rfc" id="" value="{{$e->rfc}}" placeholder="R.F.C" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>N&Uacute;M. DE CED. PROFES.</font><br>
                <input type="text" class="form-control" name="cedula_profesional" id="" value="{{$e->cedula_profesional}}" placeholder="" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
               <!-- <input type="text" class="form-control" name="Clave_M3" id="" value="{{$e->Clave_M3}}" placeholder="Clave" readonly>
-->                <input type="text" class="form-control" name="Nombre_M3" id="" value="{{$e->Nombre_M3}}" placeholder="Nombre generico" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1>CLAVE DEL DIAGNOSTICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Primario" readonly>
            </td>
        </tr>
        
        <tr>
            <td style="border: none;"> 
                <font size=1>FIRMA DEL M&Eacute;DICO:</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Firma medico" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" name="Dosis3" id="" value="{{$e->Dosis3}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion3" id="" value="{{$e->Duracion3}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada3" id="" value="{{$e->Cantidad_solicitada3}}" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida3" id="" value="{{$e->Cantidad_surtida3}}" >
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
                
        <input type="text" class="form-control" name="estatus" value="{{$e->estatus}}">
            </td>
        </tr>

        <tr>
        
        <!-- <input type="text" class="" value="{{$e->estatus}}"> -->
       
            <td  style="border: none;"><input type="radio" id="estatus1" value="Activa" name="estatus"  @if ($r->estatus=='Activa') echo checked="checked"; @endif>Activa</td>
            
            <td  style="border: none;"><input type="radio" id="estatus1" value="Surtida" name="estatus"  @if ($r->estatus=='Completo') echo checked="checked"; @endif>Surtida</td>

            <td style="border: none;"><input type="radio" id="estatus2" value="Cancelada" name="estatus"  @if ($r->estatus=='Cancelada') echo checked="checked"; @endif>Cancelada</td>

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
			<a href="{{URL::action('crecetamedica@revisarm',['Id_receta'=>$e->Id_receta])}}"> 
	        <input type="button" class="btn btn-success btn-lg nover" value="Imprimir">
	        </a>
            </td>

            <td>
            <input type="submit" class="btn btn-success btn-lg nover" value="Guardar">
            </td>
            <td>

                <a href="{{URL::action('crecetamedica@principalrmf')}}"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /></a>
            </td>
        </tr>
    </table>
	 
  </center> 

    </form>

</html> 

  </body>
  </center>

@endforeach  
@endforeach  
  </head>
</html>
@stop