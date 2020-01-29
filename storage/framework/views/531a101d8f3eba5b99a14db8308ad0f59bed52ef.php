<form class="form-horizontal" role="form" data-route="<?php echo e(route('inventarios.update',$u->id)); ?>" id="fEditaUsuario" data-method="PUT">
    <?php echo e(csrf_field()); ?>


<div class="row">

    <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Codigo Medicamento</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="email" required value="<?php echo e($u->codigo); ?>">
            
        </div>
    </div>



    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Existencia</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required autofocus value="<?php echo e($u->name); ?>">
        
        </div>
    </div>




</div>

  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary btnAjax" data-form="fEditaUsuario">
                Actualizar
            </button>
        </div>
    </div>
</form>