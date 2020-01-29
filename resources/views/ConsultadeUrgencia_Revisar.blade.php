<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">


<head>


<style>
.sinborde {
  border: 0;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon3.ico')}}"/>
<style type="text/css" media="print">
.nover {display:none}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap Core CSS -->
<link href="{{asset('HistoriaCG/jquery/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<script type="text/javascript" src="{{asset('HistoriaCG/jquery/jquery-3.2.1.js')}}"></script> 

<link rel=File-List href="{{asset('ConsultaU/filelist.xml')}}">
<link rel=Edit-Time-Data
href="{{asset('ConsultaU/editdata.mso')}}">
<link rel=OLE-Object-Data
href="{{asset('ConsultaU/oledata.mso')}}">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Consulta de Urgencia</title>
<link rel=themeData
href="{{asset('ConsultaU/themedata.thmx')}}">
<link rel=colorSchemeMapping
href="{{asset('ConsultaU/colorschememapping.xml')}}">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:"Wingdings 2";
	panose-1:5 2 1 2 1 5 7 7 7 7;
	mso-font-charset:2;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h1
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:14.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-font-kerning:0pt;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h2
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:2;
	font-size:6.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h3
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:3;
	font-size:9.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h4
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:2.0pt;
	margin-right:0cm;
	margin-bottom:2.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:4;
	font-size:8.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
h5
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	mso-pagination:widow-orphan;
	page-break-after:avoid;
	mso-outline-level:5;
	font-size:8.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Arial",sans-serif;
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 220.95pt right 441.9pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-noshow:yes;
	mso-style-unhide:no;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 220.95pt right 441.9pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:ES;
	mso-fareast-language:ES;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("027%20Consulta%20de%20Urgencia_archivos/header.htm") fs;
	mso-footnote-continuation-separator:url("027%20Consulta%20de%20Urgencia_archivos/header.htm") fcs;
	mso-endnote-separator:url("027%20Consulta%20de%20Urgencia_archivos/header.htm") es;
	mso-endnote-continuation-separator:url("027%20Consulta%20de%20Urgencia_archivos/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:14.2pt 1.0cm 1.0cm 2.0cm;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-header:url("027%20Consulta%20de%20Urgencia_archivos/header.htm") h1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
</head>

<body lang=ES-MX style='tab-interval:35.4pt'>
<div align="left"><img src="{{asset('ConsultaU/image003.png')}}" width="201" height="107"HSPACE="200" VSPACE="0"><align="right" >
<img src="{{asset('ConsultaU/image002.png')}}" width="155" height="60"HSPACE="76" VSPACE="0"></div>

<div class=WordSection1>
<div align='center'>	

<form class="form-horizontal" action="{{ 'guardacu' }}" method='POST'>
{{csrf_field()}}
<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h1><span lang=ES>Consulta de Urgencia</span></h1>
  </td>
 
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=557 colspan=3 valign=top style='width:417.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES>UNIDAD
  M&Eacute;DICA</span></h2>
 <p class=MsoNormal>
  <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'Id_unidad'>
                                        @foreach($unidades as $uni)
			<option value = '{{$uni->id_unidad}}'>{{$uni->nom_unidad}}</option>
			@endforeach
                                    </select></span></b></p>
<input type="text" style="WIDTH: 400px; HEIGHT:20px "class="sinborde" id="Id_trabajador" name='Id_trabajador' value="{{Session::get('sesionidt')}}" hidden />
   
  </td>
  <td width=155 valign=top style='width:116.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES>EXPEDIENTE</span></h2>
  
  <p class=MsoNormal><input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde" name="Id_expediente" id="Id_expediente" value='{{($consultas_urgencias->Id_expediente)}}' placeholder="Id Expediente">
</span></b></p>

     
  </td>
 </tr>
   <input type="text" style="WIDTH: 400px; HEIGHT:20px "class="sinborde" id="Id_trabajador" name='Id_trabajador' value="{{Session::get('sesionidt')}}"  hidden />
 <tr style='mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=285 valign=top style='width:213.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>FECHA DE ELABORACI&Oacute;N<br>
  </span></b>
     <p class=MsoNormal><input type="date" id="Fecha_Elaboracion" name="Fecha_Elaboracion" value='{{($consultas_urgencias->Fecha_Elaboracion)}}' class='sinborde'></p>

  </td>
  <td width=176 valign=top style='width:131.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>HORA DE ELABORACI&Oacute;N<o:p></o:p></span></b>
  <p class=MsoNormal><input type="time" value='{{($consultas_urgencias->Hora_Elaboracion)}}' class='sinborde' id='Hora_Elaboracion' name='Hora_Elaboracion'></p>
  
   
  </td>
  <td width=251 colspan=2 valign=top style='width:188.45pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>TIPO DE INTERROGATORIO:<o:p<br></span></b></p>
  <p class=MsoNormal><input type="radio" name="Tipo_Interrogatorio" id="Tipo_Interrogatorio" value="Directo"  @if ($consultas_urgencias->Tipo_Interrogatorio=='Directo') echo checked="checked"; @endif /> Directo   
  <input type="radio" name="Tipo_Interrogatorio" id="Tipo_Interrogatorio" value="Indirecto" @if ($consultas_urgencias->Tipo_Interrogatorio=='Indirecto') echo checked="checked"; @endif />Indirecto
  
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=283 style='border:none'></td>
  <td width=175 style='border:none'></td>
  <td width=95 style='border:none'></td>
  <td width=155 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:433.95pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>I. FICHA DE IDENTIFICACI&Oacute;N</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=497 colspan=8 valign=top style='width:372.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>NOMBRE DEL PACIENTE (APELLIDO PATERNO,
  APELLIDO MATERNO Y NOMBRE(S))<o:p></o:p></span></b></p>
<p class=MsoNormal>
  <input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_P" name="Apellido_P" class="sinborde" value='{{($consultas_urgencias->Apellido_P)}}' placeholder="A.Paterno:" required>
<input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_M" name="Apellido_M"class="sinborde" value='{{($consultas_urgencias->Apellido_M)}}'placeholder="A.Materno:" required>
<input type="text" style="WIDTH: 180px; HEIGHT:20px " id="Nombre" name="Nombre"class="sinborde"  value='{{($consultas_urgencias->Nombre)}}' placeholder="Nombre(s):" required>  
  
  </td>
  <td width=120 colspan=2 valign=top style='width:90.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>ESTADO CIVIL</span></b></p>
  <p class=MsoNormal> <input type="text" style="WIDTH: 80px; HEIGHT:20px "class="sinborde" name='Edo_civil' id="Edo_civil" value='{{($consultas_urgencias->Edo_civil)}}' placeholder="Edo_civil:" required  />
  
  </td>
  <td width=95 valign=top style='width:71.45pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>G&Eacute;NERO<br></span></h2>
  <p class=MsoNormal><input type="radio" name="Genero" id="Genero" value="Masculino" @if ($consultas_urgencias->Genero=='Masculino') echo checked="checked"; @endif/>Masculino<br>  
  <input type="radio" name="Genero" id="Genero"  value="Femenino" @if ($consultas_urgencias->Genero=='Femenino') echo checked="checked"; @endif />Femenino

  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=245 colspan=3 valign=top style='width:183.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>FECHA DE NACIMIENTO</span></h2>
  <p class=MsoNormal><input type="date" size="25" maxlength="20" name="fechan" id="fechan" class="sinborde" value='{{($consultas_urgencias->fechan)}}' >
 </span>  </p>
 
  </td>
  <td width=234 colspan=4 valign=top style='width:175.2pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>OCUPACI&Oacute;N DEL PACIENTE</span></h2>
  <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde" name="Ocupacion" id="Ocupacion"  placeholder="Escriba ocupaci&oacute;n:" value='{{($consultas_urgencias->Ocupacion)}}'>
  
  </td>
  <td width=234 colspan=4 valign=top style='width:175.25pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h2 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='mso-bidi-font-family:"Times New Roman";text-transform:uppercase'>EN SU
  CASO, LUGAR DE TRABAJO</span></h2>
 <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde" name="Lugar_trabajo" id="Lugar_trabajo"  placeholder="Escriba lugar de trabajo:" value='{{($consultas_urgencias->Lugar_trabajo)}}'>
  
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=356 colspan=4 valign=top style='width:266.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>PROCEDENCIA</span></h2>
  <p class=MsoNormal><span lang=ES style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial",sans-serif'>
  </span></p>
  <p class=MsoNormal> <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde" name="Procedencia" id="Procedencia"  placeholder="Escriba su procedencia:" value='{{($consultas_urgencias->Procedencia)}}' >
  </td>
  <td width=356 colspan=7 valign=top style='width:267.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>EN SU CASO, LUGAR DONDE OCURRIO EL ACCIDENTE</span></h2>
  <p class=MsoNormal>
  <input type="text" style="WIDTH: 216px; HEIGHT:20px " class="sinborde" name="Lugar_accidente" id="Lugar_accidente"  placeholder="Escriba el lugar del accidente:" value='{{($consultas_urgencias->Lugar_accidente)}}'>
  
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=478 colspan=7 valign=top style='width:358.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>NOMBRE DEL RESPONSABLE DEL PACIENTE</span></h2>
     <p class=MsoNormal> <input type="text" style="WIDTH: 450px; HEIGHT:20px " class="sinborde" name="Nombre_Tutor" id="Nombre_Tutor"  placeholder="Escriba nombre completo:" value='{{($consultas_urgencias->Nombre_Tutor)}}' >
  
  </td>
  <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>PARENTESCO CON EL PACIENTE</span></h2>
    <p class=MsoNormal> <input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde" name="Parentesco_Tutor" id="Parentesco_Tutor"  placeholder="Escriba parentesco:" value='{{($consultas_urgencias->Parentesco_Tutor)}}' >
 
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=478 colspan=7 valign=top style='width:358.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>DOMICILIO</span></h2> <p class=MsoNormal>
  <input type="text" style="WIDTH: 60px; HEIGHT:20px " id="tvia" name="tvia" class='sinborde' placeholder="Tipo Via" value='{{($consultas_urgencias->tvia)}}' >:
 <input type="text" style="WIDTH: 140px; HEIGHT:20px " id="via"  name="via" class='sinborde' placeholder="Nombre Via" value='{{($consultas_urgencias->via)}}'>,
 <input type="text" style="WIDTH: 56px; HEIGHT:20px " id="ta"  name="ta" class='sinborde' placeholder="Tipo A." value='{{($consultas_urgencias->ta)}}'> :
 <input type="text" style="WIDTH: 170px; HEIGHT:20px " id="na"  name="na" class='sinborde' placeholder="Nombre Asentamiento" value='{{($consultas_urgencias->na)}}' >, 
 No.Int.:<input type="number" style="WIDTH: 50px; HEIGHT:20px " id="nint"  name="nint"  class='sinborde' value='{{($consultas_urgencias->nint)}}'>,
 No.Ext.:<input type="number" style="WIDTH: 50px; HEIGHT:20px " id="n_ext"  name="n_ext"  class='sinborde' value='{{($consultas_urgencias->n_ext)}}' >,
C.P.:<input type="number" style="WIDTH: 60px; HEIGHT:20px " id="cp"  name="cp"  class='sinborde' value='{{($consultas_urgencias->cp)}}'>,
<input type="text" style="WIDTH: 140px; HEIGHT:20px " id="loc"  name="loc" class='sinborde' placeholder="Localidad:" value='{{($consultas_urgencias->loc)}}'>,
<input type="text" style="WIDTH: 140px; HEIGHT:20px " id="mun"  name="mun" class='sinborde' placeholder="Municipio:" value='{{($consultas_urgencias->mun)}}'>,
<input type="text" style="WIDTH: 140px; HEIGHT:20px " id="edo"  name="edo" class='sinborde' placeholder="Estado:" value='{{($consultas_urgencias->edo)}}'>
  </td>
  <td width=234 colspan=4 valign=top style='width:175.25pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h2><span lang=ES>TEL&Eacute;FONO</span></h2>
  <p class=MsoNormal>
    <input type="text" style="WIDTH: 200px; HEIGHT:20px " class="sinborde" name="tel" id="tel"  placeholder="Escriba tel&eacute;fono:"  value='{{($consultas_urgencias->tel)}}' >
 
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>II. ANTECEDENTES RELACIONADOS CON LA URGENCIA</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
<td width=712 colspan=11 style='width:533.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:14.2pt'>
    <p class=MsoNormal> <textarea rows="3" cols="86" class="sinborde" name="Antecedentes_RU" id="Antecedentes_RU"  placeholder="Escriba antecedentes relacionados con la urgencia:">
{{($consultas_urgencias->Antecedentes_RU)}}</textarea>
  </td>
 </tr>

 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>III. PADECIMIENTO ACTUAL</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
 <p class=MsoNormal> <textarea rows="3" cols="86" class="sinborde" name="Padecimiento_A" id="Padecimiento_A"  placeholder="Escriba padecimiento actual:">
{{($consultas_urgencias->Padecimiento_A)}}</textarea>
 </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>IV. SIGNOS VITALES</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>T/A</span></h4>
  <p class=MsoNormal>
  <input type="text" style="WIDTH:120px; HEIGHT:22px " id="T_A" name="T_A" class='sinborde' placeholder="T/A" value='{{($consultas_urgencias->T_A)}}'>
 
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>TEMP</span></h4>
<p class=MsoNormal>
      <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Temp" name="Temp" class='sinborde' placeholder="TEMP" value='{{($consultas_urgencias->Temp)}}'>
  
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>FREC. C.</span></h4>
<p class=MsoNormal>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_C" name="Frec_C" class='sinborde' placeholder="FREC. C" value='{{($consultas_urgencias->Frec_C)}}' >
  
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>FREC R.</span></h4>
<p class=MsoNormal>
 <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_R" name="Frec_R" class='sinborde' placeholder="FREC. R" value='{{($consultas_urgencias->Frec_R)}}'>
   
 </td>
  <td width=119 colspan=3 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>PESO</span></h4>
<p class=MsoNormal>
   <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Peso" name="Peso" class='sinborde' placeholder="PESO" value='{{($consultas_urgencias->Peso)}}'>
  
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h4><span lang=ES>TALLA</span></h4>
<p class=MsoNormal>
   <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Talla" name="Talla" class='sinborde' placeholder="TALLA" value='{{($consultas_urgencias->Talla)}}'>
  
  <p class=MsoNormal><span lang=ES style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>V. EXPLORACI&Oacute;N F&Iacute;SICA</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal>
	<textarea rows="3" cols="86" class="sinborde" name="Exploracion_fisica" id="Exploracion_fisica"  placeholder="Exploración fisica:">
{{($consultas_urgencias->Exploracion_fisica)}}</textarea>
  
  </td>
 </tr>

 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>VI. RESULTADOS DE LABORATORIO, GABINETE Y OTROS</span></h3>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
 <p class=MsoNormal>
	<textarea rows="3" cols="86" class="sinborde" name="Resultados_lab" id="Resultados_lab"  placeholder="Escriba los resultados de laboratorio, gabinete y otros:">
{{($consultas_urgencias->Resultados_lab)}}</textarea>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>VII. DIAGN&Oacute;STICO(S) PRESUNCIONAL(ES) (PRINCIPAL Y OTROS)</span></h3>
  </td>
 </tr>

 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal>
	<textarea rows="4" cols="86" class="sinborde" name="Diagnostico_pre" id="Diagnostico_pre"  placeholder="Escriba diagnostico(s) presuncional(es):">
{{($consultas_urgencias->Diagnostico_pre)}}</textarea>

	</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h3><span lang=ES>VIII. TRATAMIENTO REALIZADO</span></h3>
  </td>
 </tr>

 <tr style='page-break-inside:avoid'>
  <td width=712 colspan=11 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal>
	<textarea rows="4" cols="86" class="sinborde" name="Tratamiento_realizado" id="Tratamiento_realizado"  placeholder="Escriba tratamiento realizado:">
{{($consultas_urgencias->Tratamiento_realizado)}}</textarea>
   </td>
 </tr>
 <tr style='page-break-inside:avoid;height:30.45pt'>
  <td width=237 colspan=2 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
  <h3><span lang=ES>IX. URGENCIA CALIFICADA</span></h3>
  <p class=MsoNormal><center>
  <input type="radio" name="Urgencia_calificada" id="Urgencia_calificada"  value="Si" @if ($consultas_urgencias->Urgencia_calificada=='Si') echo checked="checked"; @endif/> Si   
  <input type="radio" name="Urgencia_calificada" id="Urgencia_calificada" value="No" @if ($consultas_urgencias->Urgencia_calificada=='No') echo checked="checked"; @endif/>No
  

  </td>
  <td width=211 colspan=3 valign=top style='width:158.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
  <h3><span lang=ES>X. CASO M&Eacute;DICO LEGAL</span></h3>
  <p class=MsoNormal><center><input type="radio" name="Caso_Medico" id="Caso_Medico" value="Si" @if ($consultas_urgencias->Caso_Medico=='Si') echo checked="checked"; @endif/> Si   
  <input type="radio" name="Caso_Medico" id="Caso_Medico" value="No" @if ($consultas_urgencias->Caso_Medico=='No') echo checked="checked"; @endif/>No
  
  </td>
  <td width=263 colspan=6 valign=top style='width:197.45pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:30.45pt'>
  <h3><span lang=ES>XI. SE NOTIFIC&Oacute; AL MINISTERIO P&Uacute;BLICO</span></h3>
 <p class=MsoNormal><center><input type="radio" name="Notificacion_ministerio" id="Notificacion_ministerio"  value="Si" @if ($consultas_urgencias->Notificacion_ministerio=='Si') echo checked="checked"; @endif/> Si   
  <input type="radio" name="Notificacion_ministerio" id="Notificacion_ministerio" value="No" @if ($consultas_urgencias->Notificacion_ministerio=='No') echo checked="checked"; @endif />No
  
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:28.8pt'>
  <td width=237 colspan=2 valign=top style='width:177.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>
  <h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>NOMBRE Y FIRMA DEL
  PACIENTE O FAMILIAR AL QUE SE LE NOTIFICA QUE ES UN CASO M&Eacute;DICO-LEGAL<o:p></o:p></span></h3>
  <p class=MsoNormal><span lang=ES><o:p>&nbsp;</o:p></span></p>
 <p class=MsoNormal> 
 <input type="text" style="WIDTH: 230px; HEIGHT:20px " class="sinborde" name="Fila1" id="Fila1"  placeholder="Escriba nombre completo:" value='{{($consultas_urgencias->Fila1)}}' >
  
  </td>
  <td width=237 colspan=4 valign=top style='width:178.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>
  <h3 align=center style='text-align:center'><span lang=ES style='font-size:
  7.0pt;mso-bidi-font-size:12.0pt;text-transform:uppercase'>NOMBRE Y FIRMA DEL
  RESPONSABLE EN CASO DE TRATARSE DE UN PACIENTE MENOR DE EDAD O CON
  CAPACIDADES DIFERENTES<o:p></o:p></span></h3><br>
   <p class=MsoNormal> 
 <input type="text" style="WIDTH: 210px; HEIGHT:20px " class="sinborde" name="Fila2" id="Fila2"  placeholder="Escriba nombre completo:" value='{{($consultas_urgencias->Fila2)}}' >
  
  </td>
  <td width=237 colspan=5 valign=top style='width:178.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.8pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><!--[if gte vml 1]><v:shapetype
   id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
   <v:stroke joinstyle="miter"/>
   <v:path gradientshapeok="t" o:connecttype="rect"/>
  </v:shapetype><v:shape id="_x0000_s1027" type="#_x0000_t202" style='position:absolute;
   left:0;text-align:left;margin-left:166.05pt;margin-top:11.6pt;width:22pt;
   height:90.35pt;z-index:251658240;mso-position-horizontal-relative:text;
   mso-position-vertical-relative:text' filled="f" stroked="f">
   <v:textbox style='layout-flow:vertical;mso-layout-flow-alt:bottom-to-top'>
    <![if RotText]><![if !mso]>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div>
      <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;mso-bidi-font-size:
      12.0pt;font-family:"Arial",sans-serif'>217B20000-027-06<o:p></o:p></span></b></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    <![endif]><![endif]></v:textbox>
  </v:shape><![endif]--><![if !vml]><![endif]>
  
<b style='mso-bidi-font-weight:
  normal'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:12.0pt;
  font-family:"Arial",sans-serif;text-transform:uppercase'>NOMBRE Y FIRMA DEL
  RESPONSABLE EN CASO DE ALTA VOLUNTARIA<o:p></o:p></span></b></p><br>
    <p class=MsoNormal> 
 <input type="text" style="WIDTH: 210px; HEIGHT:20px " class="sinborde" name="Fila3" id="Fila3"  placeholder="Escriba nombre completo:" value='{{($consultas_urgencias->Fila3)}}' >
  
  </td>
 </tr>
 <tr style='mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=475 colspan=6 valign=top style='width:355.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h5 align=left style='text-align:left'><span lang=ES>DESTINO:</span></h5>
  <p class=MsoNormal>
  <table style="width:100%" border=0>
  <tr>
  <td style="width:60px"><h5><input type="radio" name="Destino" id="Destino" value="1" @if ($consultas_urgencias->Destino=='1') echo checked="checked"; @endif />OBSERVACIÓN</h5></td>  
  <td style="width:70px"><h5><input type="radio" name="Destino" id="Destino"  value="2" @if ($consultas_urgencias->Destino=='2') echo checked="checked"; @endif/>HOSPITALIZACIÓN</td>  
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino" value="3"  @if ($consultas_urgencias->Destino=='3') echo checked="checked"; @endif/>CONSULTA EXTERNA  </td>  
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino"  value="4" @if ($consultas_urgencias->Destino=='4') echo checked="checked"; @endif/>ALTA</td>  
  </tr>
  <tr>
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino" value="5" @if ($consultas_urgencias->Destino=='5') echo checked="checked"; @endif />REFERENCIA  </td>    
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino"  value="6" @if ($consultas_urgencias->Destino=='6') echo checked="checked"; @endif />TRANSFERENCIA</td>  
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino" value="7"  @if ($consultas_urgencias->Destino=='7') echo checked="checked"; @endif/>TRASLADO  </td>  
  <td style="width:50px"><h5><input type="radio" name="Destino" id="Destino" value="8"  @if ($consultas_urgencias->Destino=='8') echo checked="checked"; @endif/>DEFUNCIÓN </td>  
</tr></table>

  </td>
  <td width=237 colspan=5 valign=top style='width:178.0pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <h5 style='margin-top:2.0pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt'>NOMBRE Y FIRMA <BR><span
  style='mso-spacerun:yes'></span>M&Eacute;DICO TRATANTE<o:p></o:p></span></h5>
  <p class=MsoNormal>
  <input type="text" style="WIDTH: 80px; HEIGHT:20px " id="Apellido_PU" name="Apellido_PU" class="sinborde"  value="{{$trabajadores->ap_tra}}"  readonly> 
  <input type="text" style="WIDTH: 80px; HEIGHT:20px " id="Apellido_MU" name="Apellido_MU" value="{{$trabajadores->am_tra}}" class="sinborde"readonly><br>
<input type="text" style="WIDTH: 100px; HEIGHT:20px " id="NombreU" name="NombreU"class="sinborde" value="{{$trabajadores->nombre_tra}}"  readonly>

  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=118 style='border:none'></td>
  <td width=118 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=111 style='border:none'></td>
  <td width=92 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=96 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=95 style='border:none'></td>
 </tr>
 <![endif]>
</table>
<table>
<tr>
<td width=118 style='border:none'></td>
  <td width=118 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=111 style='border:none'></td>
  <td width=92 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=96 style='border:none'></td>
  <td width=23 style='border:none'></td>
  <td width=95 style='border:none'></td>
  <TD><DIV ALIGN='CENTER'><img src="{{asset('ConsultaU/image001.png')}}"
  alt="Cuadro de texto: 217B20000-027-06" v:shapes="_x0000_s1027" class=shape
  v:dpi="96">
</div></TD>
</tr>
</table>
<style type="text/css" media="print">
.nover {display:none}
</style>
<p class=MsoNormal><!--[if gte vml 1]><v:shape id="_x0000_s1026" type="#_x0000_t202"
 style='position:absolute;margin-left:450pt;margin-top:106.1pt;width:81pt;
 height:18pt;z-index:251657216;mso-position-horizontal-relative:text;
 mso-position-vertical-relative:text' filled="f" stroked="f"/><![endif]--><![if !vml]><span
style='mso-ignore:vglayout'>
<p class=MsoNormal style='tab-stops:160.7pt'><span lang=ES><o:p>&nbsp;</o:p></span></p>
<div align="center">
<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
<a href="{{URL::action('cconsultaurgencia@principalcu')}}"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /> </a>
</div></form>
<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=600 height=142></td>
 </tr>
 <tr>
  <td></td>
  <td width=112 height=28 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;z-index:251657216'>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><span lang=ES><o:p>&nbsp;</o:p></span></p>

</div>
</body>

</html>
