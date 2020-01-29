<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('/laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
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
                                    <li class="breadcrumb-item active" aria-current="page">Inventario Medicamento</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Inventario Medicamento</h3></center>
          </div>
                <center>
                   &nbsp &nbsp &nbsp  
                    <img src="<?php echo e(asset('laravel/img/excel.png')); ?>" width="80" height="80">
                  


                 <img src="<?php echo e(asset('laravel/img/inventario.png')); ?>" width="80" height="80">
                    <br><br>
             <a type="button"  href="<?php echo e('excel_inventario'); ?>" class="btn btn-primary">Crear Reporte Excel</a>
              <center>

                </div>
            </div>




<?php $__env->stopSection(); ?>



<?php $__env->startSection('contenido'); ?>

    <br><br>
    
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Inventario Medicamento</div>
                    <div class="panel-body">
                        <table id="tablaAjax" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Nombre Medicamento</th>
            <th>Existencia</th>
            <th>Acción</th>
          </tr>
        </thead>

        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('/laravel/js/lib/dataTables/datatables.min.js')); ?>"></script>
<script>
$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '<?php echo route('inventarios.showTable'); ?>',
                type: "POST",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
        columns: [                    
              { data: 'id', name: 'id', className:'center' },
              { data: 'codigo', name: 'codigo' },                
              { data: 'medicamento', name: 'medicamento', className:'hidden-480' },
              { data: 'name', name: 'name' },
              { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 4,
            createdCell: function (td, cellData, rowData, row, col) {
                show="<?php echo URL::to('inventarios/"+cellData+"'); ?>";
                edit="<?php echo URL::to('/"+cellData+"/edit'); ?>";
                deleted="<?php echo URL::to('/"+cellData+"'); ?>";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }
        ]
    });
    
});
 </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>