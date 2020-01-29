<?php $__env->startSection('estilos'); ?>
<link href="<?php echo e(asset('laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('laravel/css/lib/dataTables/editor.dataTables.min.css')); ?>" rel="stylesheet">
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
                                    <li class="breadcrumb-item active" aria-current="page">Recetas Medicas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Recetas Medicas</h3></center>
          </div>
                <center>
                   <img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="80" height="80">
                    <br><br>

             <a type="button"  href="<?php echo e('buscafrm'); ?>" class="btn btn-primary">Crear Receta Medica</a>
              <center>
                </div>
            </div>
<?php $__env->stopSection(); ?>

                       
                   


<?php $__env->startSection('contenido'); ?>

    <br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Recetas</div>
                <div class="panel-body">

                    <table id="users1" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    <tfoot>
                        <tr>
                            <td class="non_searchable"></td>
                            <td></td>
                            <td ></td>
                            <td ></td>
                            <td class="non_searchable"></td>
                        </tr>
                    </tfoot>
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
           $(document).ready(function(){
			//    alert("Ya");
               $('#users1').DataTable({
					
                     serverSide: true,
                     processing: true,
                     bAutoWidth: false,
					ajax: {
                        url: '<?php echo route('datatable.recetas_medicas'); ?>',
                type: "GET",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
    
                    "columns": [
                        {data: 'Id_receta', name: 'recetas_medicas.Id_receta'},
                        {data: 'Nombre', name: 'recetas_medicas.Nombre'},
                        {data: 'Apellido_P', name: 'recetas_medicas.Apellido_P'},
                        {data: 'Apellido_M', name: 'recetas_medicas.Apellido_M'},	
                        {data: 'btn'}
                    ],				
					
					
                    language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
					
					initComplete: function () {
						//Coloca los campos de busqueda en columna individual en el encabesado
						 var r = $('#users1 tfoot tr');
						 $('#users1 thead').append(r);
						////////////////!!!!!!!!!!!!!!!!!!!!!///////////
							this.api().columns().every(function () {
								var column = this;
								 if (column.footer().className !== 'non_searchable') {
								var input = document.createElement("input");
								input.style.width = '85%';
								$(input).appendTo($(column.footer()).empty())
								.on('keyup', function () {
									column.search($(this).val(), false, false, true).draw();
								});
								 }
							});
						},
					
                });
           });
           
           </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>