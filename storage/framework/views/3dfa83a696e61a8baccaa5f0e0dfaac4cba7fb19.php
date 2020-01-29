<!--<a href="<?php echo e(route('detalleexp', $id_expediente)); ?>"><img src="<?php echo e(asset('laravel\img\system.png')); ?>">Ver</a>
<a href="#" class="btn btn-primary btn-sm">Editar</a> 
<a href="<?php echo e(route('altacitas', $id_expediente)); ?>"><img src="<?php echo e(asset('laravel\img\calendario-cita.png')); ?>">Agendar cita</a>

<a href="<?php echo e(route('modifi', $id_expediente)); ?>"> <img src="<?php echo e(asset('laravel\img\editar-archivo.png')); ?>">Modificacion</a>-->



<a href="<?php echo e(route('detalleexp', $id_expediente)); ?>"><img src="<?php echo e(asset('laravel\img\show.png')); ?>"></a>
                                                        
<a href="<?php echo e(route('modifi', $id_expediente)); ?>"> <img src="<?php echo e(asset('laravel\img\lapiz.png')); ?>"></a>
<?php
if ($deleted_at=='') {
?>
<a data-toggle="modal" data-target="#create<?= $id_expediente ?>" style="cursor: pointer;"><img src="<?php echo e(asset('laravel\img\basura.png')); ?>"></a>
<div class="modal fade" id="create<?= $id_expediente ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <b>¿Desea desactivar el expediente?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?php echo e(URL::action('cexpedientes@desactivaex', $id_expediente)); ?>">
                <button type="button" class="btn btn-primary"> Aceptar </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
} else {
    ?>
<a data-toggle="modal" data-target="#restaurar<?= $id_expediente ?>" style="cursor: pointer;"> <img src="<?php echo e(asset('laravel\img\basura.png')); ?>"></a>
<div class="modal fade" id="restaurar<?= $id_expediente ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <b>¿Activar el expediente seleccionado?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?php echo e(URL::action('cexpedientes@restauraex', $id_expediente)); ?>">
                <button type="button" class="btn btn-primary"> Aceptar </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>

