@section('contenido')
<form class="form-horizontal" role="form" data-route="{{ route('cita.update',$c->idc) }}" id="fEditaUsuario" data-method="PUT">
    {{ csrf_field() }}

<!-- MODAL  24-03-19-->
    <div class="form-group">
              <label for="fecha" class="col-md-4 control-label">Fecha</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="{{$c->fecha}}"> 
        </div>
    </div>
    <br><br>
    <div class="form-group">
        <label class="col-md-4 control-label">Asisitio a la Cita</label>
        <div class="col-md-6">
            <input type="radio"  name="asistencia" value="Si">Si
            &nbsp &nbsp
            <input type="radio"  name="asistencia" value="No">No
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