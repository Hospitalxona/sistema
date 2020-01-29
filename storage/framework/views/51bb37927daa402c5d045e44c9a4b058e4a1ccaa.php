<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
<script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
<script>
<!-- SE USA LA FUNCION KEYUP PARA REALIZAR LA BUSQUEDA CUANDO SE TECLEA UN DATO  -->
	$(document).ready(function(){					
					<!-- #BUSQUEDA ES EL NOMBRE DE LA CAJA DE TEXTO  -->
					$("#buscar").keyup(function(){
							var dato1= $("#buscar").val();
							<!--  #RESULTADO ES LA SECCION DONDE SE MMOSTRARAN LOS DATOS PROBENIENTES DEL CONTROLADOR CARCHIVO Y LA VISTA BUSQUEDAEXPEDIENTES -->
							<!-- BUSQUEDAARC ES LA RUTA DONDE SE MANDAN LOS DATOS, DATOS SE LE ASIGNA EL VALOR OBTENIDO DE LA VARIABLE DATO1 PROVENIENTE DE LA CAJA DE TEXTO BUSQUEDA-->
							$("#resultado").load('altarm?datos='+dato1).val();
							//alert(dato1);
						});
                });
<!-- AQUI TERMINA EL APARTADO DE ESTILOS  -->
</script>

<?php $__env->startSection('contenido'); ?>

<h3><p style="color:#000000">Ingresa expediente</p></h3>
                            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">   
<center>
	<br>
<div id="resultado">
	
</div>
<!--                      <button type="submit" align="right" class="btn btn-success btn-lg nover">Buscar</button>   
<a href="<?php echo e(URL::action('crecetamedica@principalrm')); ?>">
    <input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" />
</a>
    </center>
</form>-->
<!-- End Container fluid  -->
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>