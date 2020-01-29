<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('receta'); ?>
           <div class="page-breadcrumb">
                <div class="row">
                 <div class="col-5 align-self-center">
                        <h4 class="page-title">Citas Poblacion Abierta</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Citas Poblacion Abierta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>                <!-- /# column -->
   


<?php $__env->startSection('contenido'); ?>


        
            
                <div class="panel panel-default">
				
                    <div class="panel-heading"> Resultados Citas Poblacion Abierta</div>
                    <div class="panel-body">
					<!--	<header>
					<div class="col-sm-2">
					<input type="button" class="btn btn-warning btn-sm" id="boton_resetear" value="Resetear búsqueda" disabled>
					</div>
						</header> -->
                        <table id="citas" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                               <th>Consultorio</th>                                
                                <th>Nombre</th>
								<th>Apellido Paterno</th>
								<th>Apellido Materno</th>								
								<th colspan="2">Fecha/Hora</th>
								<th>Area Medica</th>
								<th>Doctor</th>	
                                <th>Asistio</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            
        


<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('js'); ?>
       <script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
        <script>
            $(document).ready(function() {
                $('#citas').DataTable({
                    "serverSide": true,
                     processing: true,
                     bAutoWidth: false,
                    "ajax": "<?php echo route('datatable.citaspobabie'); ?>",
                    "columns": [

                        {data: 'num_consul', name: 'num_consul', orderable: false, searchable: false},
                        
                        {data: 'nom_paciente', name: 'nom_paciente'},
						{data: 'ap_paciente', name: 'ap_paciente'},
						{data: 'am_paciente', name: 'am_paciente'},
						{data: 'fecha' , name: 'fecha', orderable: false, searchable: false},
						{data: 'hora' , name: 'hora', orderable: false, searchable: false},
						{data: 'area_med' , name: 'area_med',orderable: false, searchable: false},
						{data: 'doctor' , name: 'doctor', orderable: false, searchable: false},
                        {data: 'asistencia' , name: 'asistencia',orderable: false, searchable: false},

                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "search": "Buscar Por Consultorio",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="50">50</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
					
                });
            });
        </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>