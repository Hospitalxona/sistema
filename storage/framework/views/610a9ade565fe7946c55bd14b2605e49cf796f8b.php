<link rel="stylesheet" type="text/css" href="css/estilosAutocompleta.css">
<script type="text/javascript" src="js/scriptAutocompleta.js"></script> 
<!--<script type="text/javascript" src="js/medicamentos.js"></script>-->
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



    <body>
        
        <?php if($res->isEmpty()): ?> 
    <h2 align='center'>Lo sentimos, el expediente que busca no existe.</h2>   <br>
    <img src="<?php echo e(asset('laravel/img/triste.png')); ?>" width="100" height="100">
<?php else: ?>
<?php $__currentLoopData = $tre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <center> 
    <form class="form-horizontal" action="guardarm" method='POST'>
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
            <td colspan="2" style="border: none;"><b>Receta M&eacute;dica</b></td>
            <td colspan="3" style="border: none;">
                <b>FOLIO</b><br>
                <input type="text" class="form-control" name="idjReceta"  placeholder="FOLIO" readonly="" >
                <input type="text" class="form-control" name="idReceta" value="<?php echo e($idrs); ?>" id="idrs" readonly="" style="display:none">

                    <input type="text" class="form-control" name="Folio" id="gfolio" readonly="" style="display:none" >
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
                    <input type="text" class="form-control" class="sinborde" name="Nom_servicio" id="" value="<?php echo e($t->nom_jurisdiccion); ?>" placeholder="Nombre" readonly>
                <input type="text" class="form-control" class="sinborde" size=3 name="Clave_servicio" id="" value="<?php echo e($t->jurisdiccion); ?>" placeholder="Clave" readonly>
            </td>
            
            <td colspan="3" style="border: none;">
               <font size=1> NOMBRE Y CLAVE DE LA UNIDAD M&Eacute;DICA:</font><br><br>
               <input type="text" class="form-control" size=50 name="" id="" value="<?php echo e($t->nom_unidad); ?>" placeholder="Nombre" readonly>
               <input type="text" class="form-control" size=15 name="" id="" value="<?php echo e($t->clues); ?>" placeholder="Clave" readonly>
               <input type="text" style="visibility:hidden;" class="form-control" size=50 name="Id_unidad" id="" value="<?php echo e($t->id_unidad); ?>" hidden>
            </td>
            
            <td colspan="" style="border: none;">
                <font size=1>DOMICILIO DE LA UNIDAD M&Eacute;DICA:</font><br><br>
                <input type="text" class="form-control" size=40 name="" id="" value="<?php echo e($t->calle); ?>" placeholder="Direccion" readonly>
                <input type="text" class="form-control" size=40 name="" id="" value="<?php echo e($t->nom_localidad); ?>" placeholder="Localidad" readonly>
            </td>
        </tr>

        <tr>
        <td style="border: none;">
            
            
            <font size=1>
            
                &nbsp;&nbsp;<input type="radio" id="con_ext" name="con_ext"  >&nbsp;CONSULTA EXTERNA &nbsp;
                            <input type="radio" id="urgencias" name="urgencias" >&nbsp;URGENCIAS<br>
                &nbsp;&nbsp;<input type="radio" id="h" name="h" >&nbsp;HOSPITALIZACI&Oacute;N
            </font>
            <?php if($t->area == 'Consulta Externa'): ?>
                <script type="text/javascript">
                    $("#con_ext").attr("checked",true);
                </script>

                <?php elseif($t->area == 'Hospitalizacion'): ?>
                <script type="text/javascript">
                    $("#h").attr("checked",true);
                </script>
                <?php else: ?>
                <script type="text/javascript">
                    $("#urgencias").attr("checked",true);
                </script>
                <?php endif; ?>
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
               <input type="text" class="form-control" size=15 name="Id_expediente" id="" value="<?php echo e($r->id_expediente); ?>" placeholder="Numero expediente" readonly>
               <input type="text" class="form-control" size=15 name="No_Afiliacion" id="" value="<?php echo e($r->num_afiliacion); ?>" placeholder="Numero afiliacion" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                  
<font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
<input type="text" class="form-control" size=2 name="Nombre_M" id="Nombre_M1" placeholder="Medicamento" onkeyup="autocompletarMedicamento(1)">
<dl id="listaMedi1"></dl>
                </td>
                
            
            <td colspan="2" style="border: none;">
                    <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                    <input type="text" class="form-control" name="Clave_Diagnostico" id="Clave_Diagnostico1" value="" placeholder="Primario"  onkeyup="autocompletar(1)">
                    <dl id="lista1"></dl>
                
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE COMPLETO DEL PACIENTE:</font><br><br>
                <input type="text" class="form-control" size="7" name="Apellido_P" id="" value="<?php echo e($r->ap_paciente); ?>" placeholder="A. Paterno" readonly>
                <input type="text" class="form-control" size="7" name="Apellido_M" id="" value="<?php echo e($r->am_paciente); ?>" placeholder="A. Materno" readonly>
                <Input type="text" class="form-control" size="7" name="Nombre" id="" value="<?php echo e($r->nom_paciente); ?>" placeholder="Nombre(s)" readonly>
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
                <input type="text" class="form-control" name="Cantidad_solicitada"value="<?php echo e(old('Cantidad_solicitada')); ?>" placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">
                <?php if($errors->first('Cantidad_solicitada')): ?> 
                <i>
                    <span class="label label-danger label-rounded"><?php echo e($errors->first('Cantidad_solicitada')); ?></span>
                </i> 
                <?php endif; ?>
            </td>
            
            <td style="border: none;">
                <font size=1>CANTIDAD SURTIDA (LETRA)</font><br>
                <input type="text" class="form-control" name="Cantidad_surtida" id="Cantidad_surtida" value="" placeholder="CANTIDAD SURTIDA " readonly>
                <div id="resultadosmm1"></div>
            </td>
            
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>EDAD:</font><br><br>
                <input type="text" class="form-control"  id="p_fechaNacimiento" value="<?php echo e($r->fecha_nacimiento); ?>" style="display:none"  readonly  hidden="">
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
                
                <?php if($r->sexo == 'F'): ?>
                <script type="text/javascript">
                    $("#femenino").attr("checked",true);
                </script>
                <?php else: ?>
                <script type="text/javascript">
                    $("#masculino").attr("checked",true);
                </script>
                <?php endif; ?>
            </td>
            
            <td colspan="2" style="border: none;">
                    <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
                    <input type="text" class="form-control" size=2 name="Nombre_M2" id="Nombre_M2" placeholder="Medicamento" onkeyup="autocompletarMedicamento(2)">
                    <dl id="listaMedi2"></dl>
            </td>
            
            <td style="border: none;">
                
                    <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                    <input type="text" class="form-control" name="Clave_Diagnostico2" id="Clave_Diagnostico2" value="" placeholder="Primario"  onkeyup="autocompletar(2)">
                    <dl id="lista2"></dl>
            </td>
        </tr>
        
        <tr>
            <td style="border: none;">
                <font size=1>NOMBRE DEL M&Eacute;DICO:</font><br>
                <input type="text" class="form-control" size="4" name="" id="" value="<?php echo e($t->ap_tra); ?>" placeholder="Apellido Paterno" readonly>
                <input type="text" class="form-control" size="4" name="" id="" value="<?php echo e($t->am_tra); ?>" placeholder="Apellido Materno" readonly>
                <input type="text" class="form-control" size="4" name="" id="" value="<?php echo e($t->nombre_tra); ?>" placeholder="Nombre medico" readonly>
                <!-- <input type="text" class="form-control" size="4" name="Id_trabajador" value="<?php echo e($t->id_trabajador); ?>" > -->
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
                <input type="text" class="form-control" name="" id="" value="<?php echo e($t->rfc); ?>" placeholder="R.F.C" readonly>
            </td>
            
            <td style="border: none;">
                <font size=1>N&Uacute;M. DE CED. PROFES.</font><br>
                <input type="text" class="form-control" name="" id="" value="<?php echo e($t->cedula_profesional); ?>" placeholder="" readonly>
            </td>
            
            <td colspan="2" style="border: none;">
                    <font size=1>CLAVE Y NOMBRE GEN&Eacute;RICO DEL MEDICAMENTO(CUADRO B&Aacute;SICO O CAT&Aacute;LOGO)</font><br>
                    <input type="text" class="form-control" size=2 name="Nombre_M3" id="Nombre_M3" placeholder="Medicamento" onkeyup="autocompletarMedicamento(3)">
                    <dl id="listaMedi3"></dl>
                </td>
            
            <td style="border: none;">
                    <font size=1>CLAVE DEL DIAGN&Oacute;STICO(CIE-10)</font><br>
                    <input type="text" class="form-control" name="Clave_Diagnostico3" id="Clave_Diagnostico3" value="" placeholder="Primario"  onkeyup="autocompletar(3)">
                    <dl id="lista3"></dl>
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
                <input type="text" class="form-control" name="Cantidad_solicitada2" id="" value="" placeholder="Ingresa solo numeros" onkeypress="return solonumeros(event)">
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
                <a href="<?php echo e(URL::action('crecetamedica@principalrm')); ?>"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /></a>
            </td>
        </tr>
    </table>
  </center>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </body>
  