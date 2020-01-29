<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon3.ico')); ?>"/>
<style type="text/css" media="print">
.nover {display:none}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('HistoriaCG/jquery/bootstrap.min.css')); ?>" rel="stylesheet">
<!-- Custom CSS -->
<script type="text/javascript" src="<?php echo e(asset('HistoriaCG/jquery/jquery-3.2.1.js')); ?>"></script>  
<title>Notas de Evoluci&oacute;n</title>
</head>
<style>
.sinborde {
  border: 0;
}
</style>
<style>
.fecha {
  border: 0;
}
</style>
<body>
<div align='center'>
<form class="form-horizontal"  method='POST'>
<?php echo e(csrf_field()); ?>




<div align="left"><img src="<?php echo e(asset('HistoriaCG/image004.gif')); ?>" width="201" height="107"HSPACE="200" VSPACE="0"><align="right" >
<img src="<?php echo e(asset('HistoriaCG/image003.png')); ?>" width="155" height="60"HSPACE="76" VSPACE="0"></div>
<div class=WordSection1>
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:22.7pt'>
  <td width=712 style='width:533.95pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:22.7pt'>
<body lang=ES-MX style='tab-interval:35.4pt'>

<div class=WordSection1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:21.25pt'>
  <td width=557 style='width:417.5pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h5><span lang=ES>Notas de Evoluci&oacute;n</span></h5>
  </td>
  <td width=155 style='width:116.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h1><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:12.0pt'>HOJA
  No.<input type="text" value="<?php echo e($notas->hoja); ?>"  style="WIDTH: 30px; HEIGHT:25px "class="sinborde" name="hoja" id="hoja" >DE
 <input input type="number" value="<?php echo e($notas->de); ?>"  style="WIDTH: 42px; HEIGHT:25px "class="sinborde" name='de'id="de" > </h1>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:25.5pt'>
  <td width=557 valign=top style='width:417.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>UNIDAD M&Eacute;DICA:</span><span
  lang=ES style='font-size:7.0pt'><o:p></o:p></span></h2>
   <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'Id_unidad'>
                                        <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value = '<?php echo e($uni->id_unidad); ?>'><?php echo e($uni->nom_unidad); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>   
  </td>
  <td width=155 valign=top style='width:116.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>EXPEDIENTE:</span><span lang=ES
  style='font-size:7.0pt'><o:p></o:p></span></h2>
  
   <input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde" name="Id_expediente" id="Id_expediente"  placeholder="No Expediente" value="<?php echo e($notas->Id_expediente); ?>">
    
  </td>
  
 </tr>
</table>
</form>
<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=402 colspan=4 valign=top style='width:301.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif"'>NOMBRE
  DEL PACIENTE (</span><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif"'>APELLIDO PATERNO, APELLIDO MATERNO Y
  NOMBRE(S))<o:p></o:p></span></p>
  
 <input type="text" value="<?php echo e($notas->Apellido_P); ?>" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_P" name="Apellido_P" class="sinborde" > 
  <input type="text" value="<?php echo e($notas->Apellido_M); ?>" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_M" name="Apellido_M"class="sinborde">
 <input type="text" value="<?php echo e($notas->Nombre); ?>" style="WIDTH: 150px; HEIGHT:20px " id="Nombre" name="Nombre"class="sinborde" >


  </td>
  <td width=104 colspan=2 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>EDAD:<o:p></o:p></span></p>
  <input type="number" style="WIDTH: 100px; HEIGHT:20px "class="sinborde" name='Edad' id="Edad" placeholder="Edad:"  value='<?php echo e(($notas->Edad)); ?>' />
  </td>
  <td width=206 colspan=2 valign=top style='width:154.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>GENERO:<o:p></o:p></span></p> 
  <?php if($notas->Genero=='Masculino'): ?>
 <input type="radio" name="Genero" id="Genero" checked value="Masculino"/> Masculino  <br> 
  <input type="radio" name="Genero" id="Genero"  value="Femenino" />Femenino
  <?php else: ?>
   <input type="radio" name="Genero" id="Genero"  value="Masculino"/> Masculino    <br> 
  <input type="radio" name="Genero" id="Genero"  checked value="Femenino" />Femenino
<?php endif; ?></td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:3.95pt'>
  <td width=712 colspan=8 valign=bottom style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:3.95pt'>
  <h3 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>SIGNOS VITALES<o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>T/A<o:p></o:p></span></h4>
     <input type="text" value="<?php echo e($notas->T_A); ?>" style="WIDTH:120px; HEIGHT:22px " id="T_A" name="T_A" class='sinborde' placeholder="T/A" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>TEMP<o:p></o:p></span></h4>
       <input type="text" value="<?php echo e($notas->Temp); ?>" style="WIDTH:100px; HEIGHT:22px " id="Temp" name="Temp" class='sinborde' placeholder="TEMP" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC. C.<o:p></o:p></span></h4>
     <input type="text" value="<?php echo e($notas->Frec_C); ?>" style="WIDTH:100px; HEIGHT:22px " id="Frec_C" name="Frec_C" class='sinborde' placeholder="FREC. C" >
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC R.<o:p></o:p></span></h4>
   <input type="text" value="<?php echo e($notas->Frec_R); ?>" style="WIDTH:100px; HEIGHT:22px " id="Frec_R" name="Frec_R" class='sinborde' placeholder="FREC. R" >
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>PESO<o:p></o:p></span></h4>
     <input type="text" value="<?php echo e($notas->Peso); ?>" style="WIDTH:100px; HEIGHT:22px " id="Peso" name="Peso" class='sinborde' placeholder="PESO" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>TALLA</span><span lang=ES
  style='color:black'><o:p></o:p></span></h4>
    <input type="text" value="<?php echo e($notas->Talla); ?>" style="WIDTH:100px; HEIGHT:22px " id="Talla" name="Talla" class='sinborde' placeholder="TALLA" >
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=73 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=88 style='border:none'></td>
  <td width=119 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.0pt'>
  <td width=151 style='width:113.05pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:0cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>FECHA Y HORA<o:p></o:p> </span></b></p>
  </td>
  <td width=561 style='width:420.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <h6 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:1.0pt;margin-left:
  0cm'><span lang=ES>NOTAS DE EVOLUCI&Oacute;N</span></h6>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion1); ?>"  id="Fecha_1" name="Fecha_1" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion1); ?>" class='sinborde' id='Hora_Elaboracion1' name='Hora_Elaboracion1'>
  
  <div id='nota1'></div>

  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
     <textarea rows="2" cols="70" class="sinborde" name="Nota1" id="Nota1"  ><?php echo e($notas->Nota1); ?></textarea>

  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion2); ?>"  id="Fecha_2" name="Fecha_2" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion2); ?>" class='sinborde' id='Hora_Elaboracion2' name='Hora_Elaboracion2'>
   
 <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <textarea rows="2" cols="70" class="sinborde" name="Nota2" id="Nota2"  ><?php echo e($notas->Nota2); ?></textarea>
</td>
  </tr>
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion3); ?>"  id="Fecha_3" name="Fecha_3" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion3); ?>" class='sinborde' id='Hora_Elaboracion3' name='Hora_Elaboracion3'>
  
 </p> </td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <textarea rows="2" cols="70" class="sinborde" name="Nota3" id="Nota3"  ><?php echo e($notas->Nota3); ?></textarea>

  </p> </td> </tr>

   
 
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion4); ?>"  id="Fecha_4" name="Fecha_4" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion4); ?>" class='sinborde' id='Hora_Elaboracion4' name='Hora_Elaboracion4'>
  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota4" id="Nota4" ><?php echo e($notas->Nota4); ?></textarea>
  </p> </td></tr>
 

 
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion5); ?>"  id="Fecha_5" name="Fecha_5" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion5); ?>" class='sinborde' id='Hora_Elaboracion5' name='Hora_Elaboracion5'>
</td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota5" id="Nota5" ><?php echo e($notas->Nota5); ?></textarea> </p> </td></tr>
 
  
 
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion6); ?>"  id="Fecha_6" name="Fecha_6" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion6); ?>" class='sinborde' id='Hora_Elaboracion6' name='Hora_Elaboracion6'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota6" id="Nota6" ><?php echo e($notas->Nota6); ?></textarea>
  </p></td></tr>
 
 
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion7); ?>"  id="Fecha_7" name="Fecha_7" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion7); ?>" class='sinborde' id='Hora_Elaboracion7' name='Hora_Elaboracion7'>
 </td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota7" id="Nota7" ><?php echo e($notas->Nota7); ?></textarea>
  </p></td></tr>
 

 
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion8); ?>"  id="Fecha_8" name="Fecha_8" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion8); ?>" class='sinborde' id='Hora_Elaboracion8' name='Hora_Elaboracion8'>
 </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota8" id="Nota8" ><?php echo e($notas->Nota8); ?></textarea>
  </p></td></tr>
 
 
 
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion9); ?>"  id="Fecha_9" name="Fecha_9" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion9); ?>" class='sinborde' id='Hora_Elaboracion9' name='Hora_Elaboracion9'>
 </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota9" id="Nota9" ><?php echo e($notas->Nota9); ?></textarea>
  </p></td></tr>
  
 
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion10); ?>"  id="Fecha_10" name="Fecha_10" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion10); ?>" class='sinborde' id='Hora_Elaboracion10' name='Hora_Elaboracion10'>
</div>  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota10" id="Nota10" ><?php echo e($notas->Nota10); ?></textarea>
  </p></td></tr>
  
    
   
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion11); ?>"  id="Fecha_11" name="Fecha_11" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion11); ?>" class='sinborde' id='Hora_Elaboracion11' name='Hora_Elaboracion11'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota11" id="Nota11" ><?php echo e($notas->Nota11); ?></textarea>
  </p></td></tr>
  
 
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion12); ?>"  id="Fecha_12" name="Fecha_12" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion12); ?>" class='sinborde' id='Hora_Elaboracion12' name='Hora_Elaboracion12'>
 </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota12" id="Nota12" ><?php echo e($notas->Nota12); ?></textarea>
  </p></td></tr>

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion13); ?>"  id="Fecha_13" name="Fecha_13" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion13); ?>" class='sinborde' id='Hora_Elaboracion13' name='Hora_Elaboracion13'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota13" id="Nota13" ><?php echo e($notas->Nota13); ?></textarea>
  </p></td></tr>

 
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion14); ?>"  id="Fecha_14" name="Fecha_14" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion14); ?>" class='sinborde' id='Hora_Elaboracion14' name='Hora_Elaboracion14'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota14" id="Nota14" ><?php echo e($notas->Nota14); ?></textarea>
  </p></td></tr>

  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion15); ?>"  id="Fecha_15" name="Fecha_15" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion15); ?>" class='sinborde' id='Hora_Elaboracion15' name='Hora_Elaboracion15'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota15" id="Nota15" ><?php echo e($notas->Nota15); ?></textarea>
  </p></td></tr>
  
  
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion16); ?>"  id="Fecha_16" name="Fecha_16" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion16); ?>" class='sinborde' id='Hora_Elaboracion16' name='Hora_Elaboracion16'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota16" id="Nota16" ><?php echo e($notas->Nota16); ?></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion17); ?>"  id="Fecha_17" name="Fecha_17" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion17); ?>" class='sinborde' id='Hora_Elaboracion17' name='Hora_Elaboracion17'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota17" id="Nota17" ><?php echo e($notas->Nota17); ?></textarea>
  </p></td></tr>
   
</table>

<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm'><!--[if gte vml 1]><v:shapetype id="_x0000_t202" coordsize="21600,21600"
 o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t202" style='position:absolute;
 margin-left:441pt;margin-top:575.15pt;width:81pt;height:18pt;z-index:251657728;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'
 filled="f" stroked="f"/><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:251657728;margin-left:588px;margin-top:767px;
width:112px;height:28px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=112 height=28 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;z-index:251657728'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1026" style='padding:3.6pt 7.2pt 3.6pt 7.2pt'
    class=shape>
    
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'>NOTA: </span></b><span lang=ES
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>TODAS
LAS NOTAS M&Eacute;DICAS DEBER&Aacute;N ESTAR FIRMADAS POR EL M&Eacute;DICO ADSCRITO DEL SERVICIO<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:1.0pt;margin-right:16.15pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
lang=ES style='font-size:7.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>217B20000-016-06<o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.0pt'>
  <td width=150 style='width:112.85pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>FECHA Y HORA<o:p></o:p></span></b></p>
  </td>
  <td width=561 style='width:421.1pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <h6><span lang=ES>NOTAS DE EVOLUCI&Oacute;N</span></h6>
  </td>
 </tr>
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion18); ?>"  id="Fecha_18" name="Fecha_18" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion18); ?>" class='sinborde' id='Hora_Elaboracion18' name='Hora_Elaboracion18'>
</div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota18" id="Nota18" ><?php echo e($notas->Nota18); ?></textarea>
  </p></td></tr>
  
   
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion19); ?>"  id="Fecha_19" name="Fecha_19" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion19); ?>" class='sinborde' id='Hora_Elaboracion19' name='Hora_Elaboracion19'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota19" id="Nota19" ><?php echo e($notas->Nota19); ?></textarea>
  </p></td></tr>
  

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion20); ?>"  id="Fecha_20" name="Fecha_20" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion20); ?>" class='sinborde' id='Hora_Elaboracion20' name='Hora_Elaboracion20'>
 </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota20" id="Nota20" ><?php echo e($notas->Nota20); ?></textarea>
  </p></td></tr>
  
   
  
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion21); ?>"  id="Fecha_21" name="Fecha_21" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion21); ?>" class='sinborde' id='Hora_Elaboracion21' name='Hora_Elaboracion21'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota21" id="Nota21" ><?php echo e($notas->Nota21); ?></textarea>
  </p></td></tr>
  
 
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion22); ?>"  id="Fecha_22" name="Fecha_22" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion22); ?>" class='sinborde' id='Hora_Elaboracion22' name='Hora_Elaboracion22'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota22" id="Nota22" ><?php echo e($notas->Nota22); ?></textarea>
  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion23); ?>"  id="Fecha_23" name="Fecha_23" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion23); ?>" class='sinborde' id='Hora_Elaboracion23' name='Hora_Elaboracion23'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota23" id="Nota23" ><?php echo e($notas->Nota23); ?></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion24); ?>"  id="Fecha_24" name="Fecha_24" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion24); ?>" class='sinborde' id='Hora_Elaboracion24' name='Hora_Elaboracion24'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota24" id="Nota24" ><?php echo e($notas->Nota24); ?></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion25); ?>"  id="Fecha_25" name="Fecha_25" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion25); ?>" class='sinborde' id='Hora_Elaboracion25' name='Hora_Elaboracion25'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota25" id="Nota25" ><?php echo e($notas->Nota25); ?></textarea>
  </p></td></tr>
  
     
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion26); ?>"  id="Fecha_26" name="Fecha_26" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion26); ?>" class='sinborde' id='Hora_Elaboracion26' name='Hora_Elaboracion26'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota26" id="Nota26" ><?php echo e($notas->Nota26); ?></textarea>
  </p></td></tr>
  

  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion27); ?>"  id="Fecha_27" name="Fecha_27" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion27); ?>" class='sinborde' id='Hora_Elaboracion27' name='Hora_Elaboracion27'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota27" id="Nota27" ><?php echo e($notas->Nota27); ?></textarea>
  </p></td></tr>
  
 
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion28); ?>"  id="Fecha_28" name="Fecha_28" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion28); ?>" class='sinborde' id='Hora_Elaboracion28' name='Hora_Elaboracion28'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota28" id="Nota28" ><?php echo e($notas->Nota28); ?></textarea>
  </p></td></tr>
 
   
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion29); ?>"  id="Fecha_29" name="Fecha_29" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion29); ?>" class='sinborde' id='Hora_Elaboracion29' name='Hora_Elaboracion29'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota29" id="Nota29" ><?php echo e($notas->Nota29); ?></textarea>
  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion30); ?>"  id="Fecha_30" name="Fecha_30" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion30); ?>" class='sinborde' id='Hora_Elaboracion30' name='Hora_Elaboracion30'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota30" id="Nota30" ><?php echo e($notas->Nota30); ?></textarea>
  </p></td></tr>
  
 
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion31); ?>"  id="Fecha_31" name="Fecha_31" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion31); ?>" class='sinborde' id='Hora_Elaboracion31' name='Hora_Elaboracion31'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota31" id="Nota31" ><?php echo e($notas->Nota31); ?></textarea>
  </p></td></tr>
  
    
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion32); ?>"  id="Fecha_32" name="Fecha_32" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion32); ?>" class='sinborde' id='Hora_Elaboracion32' name='Hora_Elaboracion32'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota32" id="Nota32" ><?php echo e($notas->Nota32); ?></textarea>
  </p></td></tr>
  

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion33); ?>"  id="Fecha_33" name="Fecha_33" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion33); ?>" class='sinborde' id='Hora_Elaboracion33' name='Hora_Elaboracion33'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota33" id="Nota33" ><?php echo e($notas->Nota33); ?></textarea>
  </p></td></tr>
  
    
  
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion34); ?>"  id="Fecha_34" name="Fecha_34" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion34); ?>" class='sinborde' id='Hora_Elaboracion34' name='Hora_Elaboracion34'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota34" id="Nota34" ><?php echo e($notas->Nota34); ?></textarea>
  </p></td></tr>

  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion35); ?>"  id="Fecha_35" name="Fecha_35" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion35); ?>" class='sinborde' id='Hora_Elaboracion35' name='Hora_Elaboracion35'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota35" id="Nota35" ><?php echo e($notas->Nota35); ?></textarea>
  </p></td></tr>
  
  
   
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion36); ?>"  id="Fecha_36" name="Fecha_36" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion36); ?>" class='sinborde' id='Hora_Elaboracion36' name='Hora_Elaboracion36'>
</p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota36" id="Nota36" ><?php echo e($notas->Nota36); ?></textarea>
  </p></td></tr>
  
 
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <input type="text" style="height:15px" value="<?php echo e($notas->Fecha_Elaboracion37); ?>"  id="Fecha_37" name="Fecha_37" class='sinborde'>
  <input type="text"  style="height:15px" value="<?php echo e($notas->Hora_Elaboracion37); ?>" class='sinborde' id='Hora_Elaboracion37' name='Hora_Elaboracion37'>
</div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota37" id="Nota37" ><?php echo e($notas->Nota37); ?></textarea>
  </p></td></tr>
   
  

</table>

<p class=MsoNormal><span lang=ES style='font-size:8.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:3.95pt'>
  <td width=712 colspan=6 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.95pt'>
  <h3 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>SIGNOS VITALES<o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>T/A<o:p></o:p></span></h4>
    <input type="text" value="<?php echo e($notas->T_A2); ?>" style="WIDTH:120px; HEIGHT:22px " id="T_A2" name="T_A2" class='sinborde' placeholder="T/A" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>TEMP.<o:p></o:p></span></h4>
  <input type="text" value="<?php echo e($notas->Temp2); ?>" style="WIDTH:100px; HEIGHT:22px " id="Temp2" name="Temp2" class='sinborde' placeholder="TEMP" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC. C.<o:p></o:p></span></h4>
       <input type="text" value="<?php echo e($notas->Frec_C2); ?>" style="WIDTH:100px; HEIGHT:22px " id="Frec_C2" name="Frec_C2" class='sinborde' placeholder="FREC. C" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC R.<o:p></o:p></span></h4>
  <input type="text" value="<?php echo e($notas->Frec_R2); ?>" style="WIDTH:100px; HEIGHT:22px " id="Frec_R2" name="Frec_R2" class='sinborde' placeholder="FREC. R" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>PESO:<o:p></o:p></span></h4>
   <input type="text" value="<?php echo e($notas->Peso2); ?>" style="WIDTH:100px; HEIGHT:22px " id="Peso2" name="Peso2" class='sinborde' placeholder="PESO" >
  </td>
  <td width=119 valign=top style='width:89.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt'>TALLA:<o:p></o:p></span></h4>
     <input type="text" value="<?php echo e($notas->Talla2); ?>" style="WIDTH:100px; HEIGHT:22px " id="Talla2" name="Talla2" class='sinborde' placeholder="TALLA" >
  
  </td>
 </tr>
</table>
<style type="text/css">
		#abajo { display : none; }
</Style>
<div id= 'abajo'>
<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm'><!--[if gte vml 1]><v:shapetype id="_x0000_t202" coordsize="21600,21600"
 o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t202" style='position:absolute;
 margin-left:441pt;margin-top:575.15pt;width:81pt;height:18pt;z-index:251657728;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'
 filled="f" stroked="f"/><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:251657728;margin-left:588px;margin-top:767px;
width:112px;height:28px'>

</div>

</span><![endif]><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'>NOTA: </span></b><span lang=ES
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>TODAS
LAS NOTAS M&Eacute;DICAS DEBER&Aacute;N ESTAR FIRMADAS POR EL M&Eacute;DICO ADSCRITO DEL SERVICIO<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:3.0pt;margin-right:16.3pt;
margin-bottom:2.0pt;margin-left:0cm;text-align:right'><span lang=ES
style='font-size:7.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>217B20000-016-06<o:p></o:p></span></p>
</form>
<style type="text/css" media="print">
.nover {display:none}
</style>
<div align="center">
<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
<a href="<?php echo e(URL::action('cnotas@principaln')); ?>"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /> </a>
</div>
</div>
</body>
</html>
