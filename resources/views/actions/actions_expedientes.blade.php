
<a href="<?php echo e(route('detalleexp', $id_expediente)); ?>" hidden="" class="p_lupa"><img src="<?php echo e(asset('laravel\img\show.png')); ?>"></a>
                                                        
<a href="<?php echo e(route('modifica', $id_expediente)); ?>" hidden="" class="p_lapiz"> <img src="<?php echo e(asset('laravel\img\lapiz.png')); ?>"></a>


<?php
if ($deleted_at=='') {
?>
<a data-toggle="modal" data-target="#create<?= $id_expediente ?>" style="cursor: pointer;" hidden="" class="p_bote"><img src="<?php echo e(asset('laravel\img\basura.png')); ?>"></a>
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
            <div class="form-group">

<label>Razon para desactivar el expediente:</label>
    <select type="text" class="form-control" name = 'causa_baja' id = 'causa_baja' >
        <option value="Inactividad">Inactividad</option>
        <option value="Defuncion">Defunción</option>
        <option value="Baja">Baja</option>
                
        
    </select>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{URL::action('cexpedientes@desactivaex', $id_expediente)}}">
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
                <a href="{{URL::action('cexpedientes@restauraex', $id_expediente)}}">
                <button type="button" class="btn btn-primary"> Aceptar </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>


@if(Session::get('sesiontipo') === "Urgencias")
<script type="text/javascript">
    $(".p_lupa").show();
</script>
@else
<script type="text/javascript">
    $(".p_lupa,.p_lapiz,.p_bote").show();
</script>
@endif