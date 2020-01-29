<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('receta'); ?>
           <div class="page-breadcrumb">
                <div class="row">

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo e('sistema_inicio'); ?>">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuarios </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Usuarios</h3></center>
          </div>
                <center>
                   <img src="<?php echo e(asset('laravel/img/equipo.png')); ?>" width="110" height="110">
                    <br><br>

             <a type="button"  href="<?php echo e('altausu2'); ?>" class="btn btn-primary">Crear Usuarios</a>
              <center>

                </div>
            </div>
<?php $__env->stopSection(); ?>

                       
                    <!-- /# column -->
                </div>
                       
                    <!-- /# column -->
            


<?php $__env->startSection('contenido'); ?>

<br>
         <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Resultados Usuarios</div>
                    <div class="panel-body">
                        <table id="users" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Area</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                     processing: true,
                     bAutoWidth: false,
                    "ajax": "<?php echo e(url('api/usuarios2')); ?>" ,
                    "columns": [

                        {data: 'id_usuario', name: 'id_usuario' },
                        {data: 'user', name: 'user'},
                        {data: 'correo', name: 'correo' },
                        {data: 'area', name: 'area'},
                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "search": "Buscar",
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


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>