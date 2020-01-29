<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('/laravel/css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
	
         <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas</div>
                    <div class="panel-body">
                        <table id="tablaajax" class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Fecha</th>
            <th>Hora</th>
            <th>Area</th>
            <th>Consultorio</th>
            <th>Doctor</th>
            <th>Asistencia</th>
            <th>Acciones</th>
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
    
    $('#tablaajax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '<?php echo route('cita.showTable'); ?>',
                type: "POST",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
        columns: [                    
                { data: 'idc', name: 'idc', className:'center' },
                { data: 'fecha', name: 'fecha' },
                { data: 'hora', name: 'hora' },
                { data: 'area_med', name: 'area_med' },
                { data: 'num_consul', name: 'num_consul' },
                { data: 'doctor', name: 'doctor' },
                { data: 'asistencia', name: 'asistencia' },                  
                { data: 'idc', name: 'idc', className:'center'}
            ],
        columnDefs: [
        {
            targets: 7,
          createdCell: function (td, cellData, rowData, row, col) {
                show="<?php echo URL::to('cita/"+cellData+"'); ?>";
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