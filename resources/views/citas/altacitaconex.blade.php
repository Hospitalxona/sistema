
@extends('layout.master')


     
     <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
     

<script>

<!-- SE USA LA FUNCION KEYUP PARA REALIZAR LA BUSQUEDA CUANDO SE TECLEA UN DATO  -->

    $(document).ready(function(){  

        <!-- #BUSQUEDA ES EL NOMBRE DE LA CAJA DE TEXTO  -->

        $("#buscar").keyup(function(){
            var dato1= $("#buscar").val();

            <!--  #RESULTADO ES LA SECCION DONDE SE MOSTRARAN LOS DATOS PROBENIENTES DEL CONTROLADOR CARCHIVO Y LA VISTA BUSQUEDAEXPEDIENTES -->

            <!-- BUSQUEDAARC ES LA RUTA DONDE SE MANDAN LOS DATOS, DATOS SE LE ASIGNA EL VALOR OBTENIDO DE LA VARIABLE DATO1 PROVENIENTE DE LA CAJA DE TEXTO BUSQUEDA-->

            $("#resultado").load('resultbusquedaidex?datos='+dato1).val();
                            //alert(dato1);
           });
   });

</script>









    
        


</div>
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
@section('contenido')
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <h4 class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </h4>
									<h4 class="breadcrumb-item">
                                        <a href="{{ 'conexpedientes' }}">Regresar</a>
                                    </h4>

                                    <center>
                                    <h1>Alta Cita con Expediente</h1>
                                    </center>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



<h4 style="color: black;">Ingresa id de expediente</h4>

    <input type="text" class="form-control" id="buscar" placeholder="Buscar">   

<br>
<br>


<div id="resultado">
    
        


</div>





















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




@stop
















