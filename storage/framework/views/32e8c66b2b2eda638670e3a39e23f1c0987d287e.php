<?php $__env->startSection('receta_medica'); ?>
<html>
    <head>
	<?php $__currentLoopData = $recetas_medicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $receta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
	<script>
	function add(){
		$("tr:nth-child(8)").append("<td>Motivo 1 <input type='text' name='motivo' value='<?php echo e($e->motivo); ?>' readonly></td>");
		$("tr:nth-child(10)").append("<td>Motivo 2 <input type='text' name='motivo2' value='<?php echo e($e->motivo2); ?>' readonly></td>");
		$("tr:nth-child(12)").append("<td>Motivo 3 <input type='text' name='motivo3' value='<?php echo e($e->motivo3); ?>' readonly></td>");
	}
	</script>
    <body>
  
  
 <center> 

    <form class="form-horizontal" action= "<?php echo e(route('modimotivo2')); ?>" method='POST'>
        <?php echo e(csrf_field()); ?>


   <table style="border-collapse: collapse" WIDTH="1000" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td colspan="2.5" style="border: none;">
                <img  width=120 height=32  VSPACE="20"src="<?php echo e(asset('RecetaM/image006.jpg')); ?>" v:shapes="_x0000_s1027">Gobierno de estado de mexico
            </td>
            <td colspan="3" style="border: none;">
                <img width=80 HSPACE="30" height=46 VSPACE="20" src="<?php echo e(asset('RecetaM/image005.gif')); ?>" v:shapes="_x0000_s1026">ISEM
            </td>
        </tr>
        
		<tr>
		<td style="border: none;">
		<input type="text" name="Id_receta" value="<?php echo e($e->Id_receta); ?>" hidden>
		</td>
		</tr>
		
        <tr>
            <td colspan="2" style="border: none;"><b>Receta M&eacute;dica</b></td>
            <td colspan="3" style="border: none;">
                <b>FOLIO</b><br>
                <input type="text" class="form-control" name="Folio" value="<?php echo e($e->Folio); ?>" readonly="">
            </td>
           <!-- <td rowspan="8" class="capceleravertical">ISEM BOTICA PROVEEDOR</td>-->
        </tr>
       
        <tr>
            <td colspan="2" style="border: none;"><input type="radio" id="ordinariamedicamentoscontrolados" value="1" name="ordinariamedicamentoscontrolados" <?php if($e->ordinariamedicamentoscontrolados=='1'): ?> echo checked="checked"; <?php endif; ?>/>ORDINARIA</td>
            <td colspan="3" style="border: none;"><input type="radio" id="ordinariamedicamentoscontrolados" value="2" name="ordinariamedicamentoscontrolados" <?php if($e->ordinariamedicamentoscontrolados=='2'): ?> echo checked="checked"; <?php endif; ?>/>MEDICAMENTOS CONTROLADOS GRUPO II Y III</td>
        </tr>
    <tr>
        
            <td colspan="" style="border: none;">
                <font size=1>NOMBRE Y CLAVE DE LA JURISDICCI&Oacute;N:</font><br><br>
                <input type="text" class="form-control" class="sinborde" name="Nom_servicio" id="" value="<?php echo e($e->jurisdiccion); ?>" readonly>
                <input type="text" class="form-control" class="sinborde" size=3 name="Clave_servicio" id="" value="<?php echo e($e->nom_jurisdiccion); ?>" readonly>
            </td>
            
            <td colspan="3" style="border: none;">
               <font size=1> NOMBRE Y CLAVE DE LA UNIDAD M&Eacute;DICA:</font><br><br>
               <input type="text" class="form-control" size=50 name="clues" id="" value="<?php echo e($e->clues); ?>" placeholder="Nombre" readonly>
               <input type="text" class="form-control" size=15 name="nom_unidad" id="" value="<?php echo e($e->nom_unidad); ?>" placeholder="Clave" readonly>
               <input type="text" style="visibility:hidden;" class="form-control" size=50 name="Id_unidad" id="" value="<?php echo e($e->id_unidad); ?>" placeholder="Nombre" hidden>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DOMICILIO DE LA UNIDAD M&Eacute;DICA:</font><br><br>
                <input type="text" class="form-control" size=40 name="" id="" value="<?php echo e($e->nom_localidad); ?>" readonly>
                <input type="text" class="form-control" size=40 name="" id="" value="<?php echo e($e->calle); ?>" readonly>
            </td>
        </tr>
        <tr>  
            <td style="border: none;">
            <font size=1>
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="1" <?php if($e->Area=='1'): ?> echo checked="checked"; <?php endif; ?>/>&nbsp;CONSULTA EXTERNA &nbsp;
                <input type="radio" id="Area" name="Area" value="2" <?php if($e->Area=='2'): ?> echo checked="checked"; <?php endif; ?>/>&nbsp;URGENCIAS<br>
                &nbsp;&nbsp;<input type="radio" id="Area" name="Area" value="3" <?php if($e->Area=='3'): ?> echo checked="checked"; <?php endif; ?>/>&nbsp;HOSPITALIZACI&Oacute;N
            </font>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CLAVE Y NOMBRE DEL SERVICIO:</font><br><br>
                <input type="text" class="form-control" size="5" name="Clave_servicio" id="" value="<?php echo e($e->Clave_servicio); ?>" placeholder="Clave" readonly>
                <input type="text" class="form-control" size="20" name="Nom_servicio" id="" value="<?php echo e($e->Nom_servicio); ?>" placeholder="Nombre" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1> No.LICENCIA SANITARIA</font><br><br>
               <input type="text" class="form-control" name="No_licencia" id="" value="<?php echo e($e->No_licencia); ?>" placeholder="No.licencia" readonly>
            </td>
            
            <td style="border: none;">
               <font size=1> COBERTURA*</font><br>
               <br>
               <font size=1>
                &nbsp;&nbsp;<input type="radio" id="Cobertura" name="Cobertura" value="1" <?php if($e->Cobertura=='1'): ?> echo checked="checked"; <?php endif; ?>/>&nbsp;SP&nbsp;
                <input type="radio" id="Cobertura" name="Cobertura" value="2" <?php if($e->Cobertura=='2'): ?> echo checked="checked"; <?php endif; ?> / >&nbsp;PA&nbsp;
                <input type="radio" id="Cobertura" name="Cobertura" value="3" <?php if($e->Cobertura=='3'): ?> echo checked="checked"; <?php endif; ?> />&nbsp;OP&nbsp;
                </font>
            </td>
            
            <td style="border: none;">
                <font size=1>FECHA DE ELABORACI&Oacute;N:</font><br><br>
                <input type="date" class="form-control" name="Fecha_Elaboracion" id="Fecha_Elaboracion" value="<?php echo e($e->Fecha_Elaboracion); ?>" readonly>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
               <font size=1>N&Uacute;MERO DE EXPEDIENTE Y DE AFILIACI&Oacute;N:</font><br><br>
               <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="<?php echo e($e->Id_expediente); ?>" placeholder="Numero expediente" readonly>
               <input type="text" class="form-control" size=15 name="No_Afiliacion" id="" value="<?php echo e($e->No_Afiliacion); ?>" placeholder="Numero afiliacion" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
               <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br><br>
              <!-- <input type="text" class="form-control" size=2 name="Clave_M" id="" value="<?php echo e($e->Clave_M); ?>" placeholder="Clave" -->readonly>
               <input type="text" class="form-control" size=50 name="Nombre_M" id="" value="<?php echo e($e->Nombre_M); ?>" placeholder="Nombre" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Primario" readonly>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE COMPLETO DEL PACIENTE:</font><br><br>
                <input type="text" class="form-control" size="7" name="Apellido_P" id="" value="<?php echo e($e->Apellido_P); ?>" placeholder="A. Paterno" readonly>
                <input type="text" class="form-control" size="7" name="Apellido_M" id="" value="<?php echo e($e->Apellido_M); ?>" placeholder="A. Materno" readonly>
                <Input type="text" class="form-control" size="7" name="Nombre" id="" value="<?php echo e($e->Nombre); ?>" placeholder="Nombre(s)" readonly>
            </td>
            
            <td colspan="" style="border: none;"> 
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" size=20 name="Dosis" id="" value="<?php echo e($e->Dosis); ?>" placeholder="Indicaciones" readonly>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion" id="" value="<?php echo e($e->Duracion); ?>" readonly>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada" id="" value="<?php echo e($e->Cantidad_solicitada); ?>" readonly>
            </td>
            
            <td style="border: none;" id="motivo">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida" id="Cantidad_surtida" value="<?php echo e($e->Cantidad_surtida); ?>"><br>
				<center>
				<button type="button" class="btn btn-primary pull-right" onclick="add();">Mostrar</button>
				<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Motivo</a>
			</center>
            </td>
            <?php echo $__env->make('create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>EDAD:</font><br><br>
                <input type="text" class="form-control" name="Edad" id="" value="<?php echo e($e->Edad); ?>" placeholder="Edad" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>G&Eacute;NERO</font>
                <br>
                <input type="text" class="form-control" size="1" name="Genero" id="" value="<?php echo e($e->Genero); ?>" placeholder="Genero" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
              <!--  <input type="text" class="form-control" name="Clave_M2" id="" value="<?php echo e($e->Clave_M2); ?>" readonly>-->
                <input type="text" class="form-control" name="Nombre_M2" id="" value="<?php echo e($e->Nombre_M2); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                <input type="text" class="form-control" name="" id="" value="" placeholder="Primario" readonly>
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE DEL M&Eacute;DICO:</font><br>
				<input type="text" class="form-control" size="" name="Id_trabajador"style="visibility:hidden;"  id="" value="<?php echo e($e->id_trabajador); ?>" hidden>
                <input type="text" class="form-control" size="4" name="ap_tra" id="" value="<?php echo e($e->ap_tra); ?>" placeholder="Apellido Paterno" readonly>
                <input type="text" class="form-control" size="4" name="am_tra" id="" value="<?php echo e($e->am_tra); ?>" placeholder="Apellido Materno" readonly>
                <input type="text"  class="form-control" size="4" name="nombre_tra" id="" value="<?php echo e($e->nombre_tra); ?>" placeholder="Nombre medico" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>INDICACIONES(DOSIS)</font><br>
                <input type="text" class="form-control" name="Dosis2" id="" value="<?php echo e($e->Dosis2); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion2" id="" value="<?php echo e($e->Duracion2); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada2" id="" value="<?php echo e($e->Cantidad_solicitada2); ?>" readonly>
            </td>
            
            <td style="border: none;" id="motivo2">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida2" id="" value="<?php echo e($e->Cantidad_surtida2); ?>">
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>R.F.C:</font><br>
                <input type="text" class="form-control" name="rfc" id="" value="<?php echo e($e->rfc); ?>" placeholder="R.F.C" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>N&Uacute;M. DE CED. PROFES.</font><br>
                <input type="text" class="form-control" name="cedula_profesional" id="" value="<?php echo e($e->cedula_profesional); ?>" placeholder="" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
               <!-- <input type="text" class="form-control" name="Clave_M3" id="" value="<?php echo e($e->Clave_M3); ?>" placeholder="Clave" readonly>
-->                <input type="text" class="form-control" name="Nombre_M3" id="" value="<?php echo e($e->Nombre_M3); ?>" placeholder="Nombre generico" readonly>
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
                <input type="text" class="form-control" name="Dosis3" id="" value="<?php echo e($e->Dosis3); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>DURACI&Oacute;N DEL TRATAMIENTO</font><br>
                <input type="text" class="form-control" name="Duracion3" id="" value="<?php echo e($e->Duracion3); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SOLICITADA</font><br>
                <input type="text" class="form-control" name="Cantidad_solicitada3" id="" value="<?php echo e($e->Cantidad_solicitada3); ?>" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida3" id="" value="<?php echo e($e->Cantidad_surtida3); ?>" >
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
                
        <input type="text" class="form-control" name="estatus" value="<?php echo e($e->estatus); ?>">
            </td>
        </tr>

        <tr>
        
        <!-- <input type="text" class="" value="<?php echo e($e->estatus); ?>"> -->
       
            <td  style="border: none;"><input type="radio" id="estatus1" value="Activa" name="estatus"  <?php if($r->estatus=='Activa'): ?> echo checked="checked"; <?php endif; ?>>Activa</td>
            
            <td  style="border: none;"><input type="radio" id="estatus1" value="Surtida" name="estatus"  <?php if($r->estatus=='Completo'): ?> echo checked="checked"; <?php endif; ?>>Surtida</td>

            <td style="border: none;"><input type="radio" id="estatus2" value="Cancelada" name="estatus"  <?php if($r->estatus=='Cancelada'): ?> echo checked="checked"; <?php endif; ?>>Cancelada</td>

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
			<a href="<?php echo e(URL::action('crecetamedica@revisarm',['Id_receta'=>$e->Id_receta])); ?>"> 
	        <input type="button" class="btn btn-success btn-lg nover" value="Imprimir">
	        </a>
            </td>

            <td>
            <input type="submit" class="btn btn-success btn-lg nover" value="Guardar">
            </td>
            <td>

                <a href="<?php echo e(URL::action('crecetamedica@principalrmf')); ?>"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /></a>
            </td>
        </tr>
    </table>
	 
  </center> 

    </form>

</html> 

  </body>
  </center>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  </head>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>