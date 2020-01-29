<form class="form-horizontal" role="form" data-route="{{ route('citas.update',$u->id) }}" id="fEditaUsuario" data-method="PUT">
    {{ csrf_field() }}

<div class="row">

    <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Fecha</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="fecha" required value="{{$u->fecha}}">
            
        </div>
    </div>

        <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Hora</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="hora" required value="{{$u->hora}}">
            
        </div>
    </div>

        <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Area Medica</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="area_med" required value="{{$u->area_med}}">
            
        </div>
    </div>

        <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Consultorio</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="num_consul" required value="{{$u->num_consul}}">
            
        </div>
    </div>

            <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Doctor</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="doctor" required value="{{$u->doctor}}">
            
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Asisitio a la Cita</label>
        <div class="col-md-6">
            <input type="radio"  name="asistencia" value="Si">Si
            &nbsp &nbsp
            <input type="radio"  name="asistencia" value="No">No
        </div>
    </div>

</div>

  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary btnAjax" data-form="fEditaUsuario">
                Registrar Asistencia
            </button>
        </div>
    </div>
</form>