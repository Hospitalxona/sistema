@extends('main')
@section('contenido')

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Receta Médica</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Receta Médica</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

			
<div align='center' class="row">    
 <div class="col-md-12">						
 <a href="{{'altarm'}}"><div class="card" style="background-color: #c1c1c1;"  >
                            <div class="card-body" align='center'>
                                <h2 class="m-b-0"><i class="m-t-100 mdi mdi-arrow-up-bold-circle"></i><br>
                                <span class="label label-info label-rounded">Crear receta médica</span></h2>
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
<li>
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
							
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                  <div class="ml-1 d-none d-sm-block">
								  <form action="{{route('browserfolio')}}" class="app-search">
                                <input type="text" class="form-control"  name="buscar" placeholder="Buscar">   
                                    
						  
							 </div> 
							 
							  <button type="submit" align="right" class="btn btn-success btn-lg nover">Buscar</button>
                                </div>
                            </a> 
                      
                              
                        </li>
                    </ul>
</form>


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

@foreach($consulta as $con)
<!--{{$con->Folio}}
{{$con->Nombre}}
{{$con->Apellido_P}}
{{$con->Apellido_M}}
{{$con->Fecha_Elaboracion}}-->

<tbody>
<tr>
<th class="table-active" scope="row">{{$con->Folio}}</th>
<td>{{$con->Nombre}}</td>
<td>{{$con->Apellido_P}}</td>
<td>{{$con->Apellido_M}}</td>
<td>{{$con->Fecha_Elaboracion}}</td>

	@if($con->deleted_at=="")
	<td>
	<a href="{{URL::action('crecetamedica@desactivarm',['Id_receta'=>$con->Id_receta])}}"> 
	<i class="mdi mdi-arrow-down-bold-circle"></i>Desactivar	
	</a> </td>
	<td>
	<a href="{{URL::action('crecetamedica@revisarm',['Id_receta'=>$con->Id_receta])}}"> 
	<i class="mdi mdi mdi-eye"></i>Revisar </td>	
	</a> 
	@else
	 <td><a href="{{URL::action('crecetamedica@restaurarm',['Id_receta'=>$con->Id_receta])}}">
	<i class="mdi mdi mdi-file-restore"></i> Restaurar
	</a></td> 
	<td><a href="{{URL::action('crecetamedica@eliminarm',['Id_receta'=>$con->Id_receta])}}"> 
	<i class="mdi mdi mdi-delete-empty"></i>Eliminar
	</a> 
	@endif
	</td>
</tr>
</tbody>

@endforeach
</table>
</div>
 @stop