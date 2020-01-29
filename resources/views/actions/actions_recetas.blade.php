

<?php
if ($deleted_at=='') {
?>
<a href="{{route('revisarm', $Id_receta)}}" class="btn btn-primary btn-sm">Ver</a>
<a data-toggle="modal" data-target="#create<?= $Id_receta ?>" class="btn btn-danger btn-sm">Desactivar</a>
<div class="modal fade" id="create<?= $Id_receta ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <b>¿Desea desactivar la receta?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{route('desactivarm', $Id_receta)}}">
                <button type="button" class="btn btn-primary"> Aceptar </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
} else {
    ?>
<a data-toggle="modal" data-target="#restaurar<?= $Id_receta ?>" class="btn btn-primary btn-sm"> Activar</a>
<div class="modal fade" id="restaurar<?= $Id_receta ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <b>¿Activar la receta seleccionado?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{route('restaurarm', $Id_receta)}}">
                <button type="button" class="btn btn-primary"> Aceptar </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>


