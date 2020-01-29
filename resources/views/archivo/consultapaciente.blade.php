@extends('layout.master')
@section('estilos')

<!-- AQUI ABRE SECCION DE ESTILOS Y SE MANDA A LLAMAR A LA RUTA DONDE ESTA EL ARCHIVO JS  -->
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script> 
<script src="{{asset('js/jquery.min.js')}}"></script>

<style type="text/css">
		
	</style>


<script>
<!-- SE USA LA FUNCION KEYUP PARA REALIZAR LA BUSQUEDA CUANDO SE TECLEA UN DATO  -->
	$(document).ready(function(){					
					<!-- #BUSQUEDA ES EL NOMBRE DE LA CAJA DE TEXTO  -->
					$("#busqueda").keyup(function(){
							var dato1= $("#busqueda").val();
							
							
							<!--  #RESULTADO ES LA SECCION DONDE SE MMOSTRARAN LOS DATOS PROBENIENTES DEL CONTROLADOR CARCHIVO Y LA VISTA BUSQUEDAEXPEDIENTES -->
							<!-- BUSQUEDAARC ES LA RUTA DONDE SE MANDAN LOS DATOS, DATOS SE LE ASIGNA EL VALOR OBTENIDO DE LA VARIABLE DATO1 PROVENIENTE DE LA CAJA DE TEXTO BUSQUEDA-->
							$("#resultado").load('busquedaArc?datos='+dato1);
							
							
						});
					
                });
			
<!-- AQUI TERMINA EL APARTADO DE ESTILOS  -->
</script>
@stop

@section('contenido')
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Expedientes Pacientes</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ 'principalconsultas' }}">Expedientes Pacientes</a></li>
                                </ol>
                            </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
 <div align='center' class="row">

					   
                    <!-- /# column -->
                </div>
			                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
<li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Buscar:</span>
                                    </div>
                                </div>
                            </a>
                            <!-- ESTA ES LA CAJA DE TEXTO  -->
                                <input type="text" class="form-control" placeholder="Search &amp; enter" id='busqueda' name='busqueda'>
                               
                        </li>
                    </ul>
				<!-- Paginacion  -->
<div class="table-responsive">

	<!--  ESTA ES LA SECCION DONDE SE CARGAN LOS DATOS -->
	<div id='resultado'></div>

<div align='center'></div>			

<style type="text/css">
.pagination {
 display: inline-block;
 padding-left: 0;
 margin: 10px 0;
 border-radius: 4px;
 }
 .pagination > li {
 display: inline;
 }
 .pagination > li > a,
 .pagination > li > span {
 position: relative;
 float: left;
 padding: 6px 12px;
 margin-left: -1px;
 line-height: 1.428571429;
 color: #428bca;
 text-decoration: none;
 background-color: #fff;
 border: 1px solid #ddd;
 }
 .pagination > li:first-child > a,
 .pagination > li:first-child > span {
 margin-left: 0;
 border-top-left-radius: 4px;
 border-bottom-left-radius: 4px;
 }
 .pagination > li:last-child > a,
 .pagination > li:last-child > span {
 border-top-right-radius: 4px;
 border-bottom-right-radius: 4px;
 }
 .pagination > li > a:hover,
 .pagination > li > span:hover,
 .pagination > li > a:focus,
 .pagination > li > span:focus {
 color: #2a6496;
 background-color: #eee;
 border-color: #ddd;
 }
 .pagination > .active > a,
 .pagination > .active > span,
 .pagination > .active > a:hover,
 .pagination > .active > span:hover,
 .pagination > .active > a:focus,
 .pagination > .active > span:focus {
 z-index: 2;
 color: #fff;
 cursor: default;
 background-color: #428bca;
 border-color: #428bca;
 }
 .pagination > .disabled > span,
 .pagination > .disabled > span:hover,
 .pagination > .disabled > span:focus,
 .pagination > .disabled > a,
 .pagination > .disabled > a:hover,
 .pagination > .disabled > a:focus {
 color: #999;
 cursor: not-allowed;
 background-color: #fff;
 border-color: #ddd;
 }
</style>
			<!-- End Container fluid  -->
            @stop
			