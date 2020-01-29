<form class="form-horizontal" role="form" data-route="{{ route('rol.update',$u->id) }}" id="fEditaUsuario" data-method="PUT">
    {{ csrf_field() }}

<div class="row">
    <div class="form-group">
        <label for="nombre" class="col-md-4 control-label">Existencia</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control" name="nombre" required autofocus value="{{$u->nombre}}">
        
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