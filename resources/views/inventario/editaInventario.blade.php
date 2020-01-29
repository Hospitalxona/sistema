@extends('layouts.master')

@section('contenido')
<form class="form-horizontal" role="form" data-route="{{ route('inventarios.update',$u->id) }}" id="fEditaUsuario" data-method="PUT">
    {{ csrf_field() }}

  <div class="row">
    <div class="form-group">
        <label for="nombre" class="col-md-4 control-label">Codigo Medicamento</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control" name="nombre" required autofocus value="{{$u->codigo}}">
        
        </div>
    </div>

    <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Existencia</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="email" required value="{{$u->existencia}}">
            
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
@endsection