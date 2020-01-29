@extends('main')
@section('contenido')
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Hoja de Triage</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Hoja de Triage</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			 <div align='center' class="row">    
 <div class="col-md-12">						
 <a href="{{'altaht'}}"><div class="card" style="background-color: #c1c1c1;"  >
                            <div class="card-body" align='center'>
                                <h2 class="m-b-0"><i class="m-t-100 mdi mdi-arrow-up-bold-circle"></i><br>
                                <span class="label label-info label-rounded">Crear hoja de triage</span></h2>
                            </div>
                        </div>
						</a>
                       </div>
					   
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
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
<!-- Paginacion  -->
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr class="table-active">
<th scope="col"><i class="mdi mdi mdi-key"></i>Folio</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Nombre(s)</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Apellido Paterno	</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Apellido Materno</th>
<th scope="col"><i class="mdi mdi mdi-calendar"></i>Fecha de Creación</th>
<th scope="col"colspan="2" ><div align='center'><i class="mdi mdi mdi-apps"></i>Acciones</div></th>

</tr>
</thead>
@foreach($hojas_triages as $ht)
<tbody>
<tr>
<th class="table-active" scope="row">{{$ht->Folio}}</th>
<td>{{$ht->Nombre}}</td>
<td>{{$ht->Apellido_P}}</td>
<td>{{$ht->Apellido_M}}</td>
<td>{{$ht->Fecha_Elaboracion}}</td>

	@if($ht->deleted_at=="")
	<td>
	<a href="{{URL::action('chojatriage@desactivaht',['Folio'=>$ht->Folio])}}"> 
	<i class="mdi mdi-arrow-down-bold-circle"></i>Desactivar	
	</a> </td>
	<td>
	<a href="{{URL::action('chojatriage@revisaht',['Folio'=>$ht->Folio])}}"> 
	<i class="mdi mdi mdi-eye"></i>Revisar </td>	
	</a> 
	@else
	 <td><a href="{{URL::action('chojatriage@restauraht',['Folio'=>$ht->Folio])}}">
	<i class="mdi mdi mdi-file-restore"></i> Restaurar
	</a></td> 
	<td><a href="{{URL::action('chojatriage@eliminaht',['Folio'=>$ht->Folio])}}"> 
	<i class="mdi mdi mdi-delete-empty"></i>Eliminar
	</a> 
	@endif
	</td>
</tr>
</tbody>
@endforeach
</table>
<div align='center'>{{ $hojas_triages->links() }}</div>			

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