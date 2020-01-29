<form class="form-horizontal" role="form" data-route="<?php echo e(route('citas.update',$c->id_cit)); ?>" id="fEditaUsuario" data-method="PUT">
    <?php echo e(csrf_field()); ?>


<div class="row">

    <div class="form-group">
        <label for="id_cit" class="col-md-4 control-label">Clave</label>

        <div class="col-md-6">
            <input id="id_cit" type="text" class="form-control" name="id_cit" required value="<?php echo e($c->id_cit); ?>">
            
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