@extends('layout.master')

@section('css')
<link href="{{asset('laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('contenido')

    <a href="">
    <button type="button" class="btn btn-primary">Crear Rol</button></a>

    <br><br>
    
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicamentos Inventario</div>
                    <div class="panel-body">
                        <table id="tablaAjax" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>Idsdd</th>
            <th>Nombre</th>
            <th>Medicamento</th>
            <th>Existencia</th>
            <th>Edit existencia</th>
            <th>ACCION</th>
          </tr>
        </thead>

        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </table>
@endsection
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{route('Modal.update','test')}}" method="post">
            {{method_field('patch')}}
            {{csrf_field()}}
          <div class="modal-body">
                <input type="hidden" name="id_inventario" id="cat_id" value="">
                @include('usuario.verInventario')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
      </form>
    </div>
  </div>
</div>




@section('js')
<script src="{{asset('laravel/js/lib/dataTables/datatables.min.js')}}"></script>
<script>
$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: "{{ url('api/inventario') }}",

        columns: [
                        {data: 'id_inventario'},
                        {data: 'medi_mat'},
                        {data: 'medicamento'},
                        {data: 'existencia'},
                        {data: 'btn1'},
                        {data: 'btn'},
                    ],


     columnDefs: [{
        width: "10px",
        targets: 0
      },
      {
        width: "40px",
        targets: 1
      },
      {
        width: "90px",
        targets: 2
      },
      {
        width: "30px",
        targets: 3
      },
       {
        width: "30px",
        targets: 4,
      },
      {
        width: "80px",
        targets: 5,

      }


    ]

    });
    
});
 </script>
@endsection