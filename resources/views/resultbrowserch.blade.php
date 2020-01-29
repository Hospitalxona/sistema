@extends('main')
@section('contenido')
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
           <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Historia Clínica General</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Historia Clínica General</li>
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
 <a href="{{'altahc'}}"><div class="card" style="background-color: #c1c1c1;"  >
                            <div class="card-body" align='center'>
                                <h2 class="m-b-0"><i class="m-t-100 mdi mdi-arrow-up-bold-circle"></i><br>
                                <span class="label label-info label-rounded">Crear historia clínica general</span></h2>
                            </div>
                        </div>
						</a>
                       </div>
					   
                    <!-- /# column -->
                </div>
				<ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== 
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
                        </li>-->
                        <li>
        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"></a>
            <div class="d-flex align-items-center">
                <i class="mdi mdi-magnify font-20 mr-1"></i>
                  <div class="ml-1 d-none d-sm-block">
                      <form action="{{route('browserfoliohc')}}" class="app-search">
                            <input type="text" class="form-control"  name="buscar" placeholder="Buscar">   
                  </div> 
                      <button type="submit" align="right" class="btn btn-success btn-lg nover">Buscar</button>   
                      </form>
                </div>
                    
</li>
                    </ul>

				
		<!-- Paginacion  -->
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr class="table-active">
<th scope="col"><i class="mdi mdi mdi-key"></i>Id</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Nombre(s)</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Apellido Paterno	</th>
<th scope="col"><i class="mdi mdi mdi mdi-account-card-details"></i>Apellido Materno</th>
<th scope="col"><i class="mdi mdi mdi-calendar"></i>Fecha de Creación</th>
<th scope="col"colspan="2" ><div align='center'><i class="mdi mdi mdi-apps"></i>Acciones</div></th>

</tr>
</thead>
@foreach($consulta as $hc)
<tbody>
<tr>
<th class="table-active" scope="row">{{$hc->Id_HistoriaClinica}}</th>
<td>{{$hc->Nombre}}</td>
<td>{{$hc->Apellido_P}}</td>
<td>{{$hc->Apellido_M}}</td>
<td>{{$hc->Fecha_Elaboracion}}</td>

	@if($hc->deleted_at=="")
	<td>
	<a href="{{URL::action('chistoriaclinicageneral@desactivahc',['Id_HistoriaClinica'=>$hc->Id_HistoriaClinica])}}"> 
	<i class="mdi mdi-arrow-down-bold-circle"></i>Desactivar	
	</a> </td>
	<td>
	<a href="{{URL::action('chistoriaclinicageneral@revisahc',['Id_HistoriaClinica'=>$hc->Id_HistoriaClinica])}}"> 
	<i class="mdi mdi mdi-eye"></i>Revisar </td>	
	</a> 
	@else
	 <td><a href="{{URL::action('chistoriaclinicageneral@restaurahc',['Id_HistoriaClinica'=>$hc->Id_HistoriaClinica])}}">
	<i class="mdi mdi mdi-file-restore"></i> Restaurar
	</a></td> 
	<td><a href="{{URL::action('chistoriaclinicageneral@eliminahc',['Id_HistoriaClinica'=>$hc->Id_HistoriaClinica])}}"> 
	<i class="mdi mdi mdi-delete-empty"></i>Eliminar
	</a> 
	@endif
	</td>
</tr>
</tbody>
@endforeach
</table>
@stop