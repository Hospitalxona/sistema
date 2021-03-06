@extends('layouts.master')

@section('contenido')
<form class="form-horizontal" role="form" data-route="{{ route('rol.update',$u->id) }}" id="fEditaUsuario" data-method="PUT">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control" name="nombre" required autofocus value="{{$u->nombre}}">
            <span class="msg-error hidden" id="err_nombre"></span>
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
@endsection