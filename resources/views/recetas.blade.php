@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        <table id="recetas_medicas" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>App</th>
                                <th>Apm</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#recetas_medicas').DataTable({
            
            "processing": true,
            "serverSide": true,
            "language" :{"url": window.Laravel.url+"/js/data-table-spanish.json"},
            "ajax": "{{ route('datatable.recetas_medicas') }}",
            "columns": [
                {data: 'Id_receta', name: 'Id_receta'},
                {data: 'Nombre', name: 'Nombre'},
                {data: 'Apellido_P', name: 'Apellido_P'},
                {data: 'Apellido_M', name: 'Apellido_M'}
            ]
        });
    });
</script>
@endsection