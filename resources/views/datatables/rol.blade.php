@extends('layout.master')

@section('css')
<link href="{{asset('laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection
@section('receta')
           <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ 'sistema_inicio' }}">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Inventario De Medicamentos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
@endsection



@section('contenido')

	
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Inventario De Medicamentos</div>
                    <div class="panel-body">
                        <table id="tablaAjax" class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Codigo</th>
            <th>Medicamento</th>
            <th>Existencia</th>
            <th>Acciones</th>
	      </tr>
	    </thead>

        
                    </div>
                </div>
            </div>
        </div>
    </div>
	</table>
@endsection

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
        ajax: {
                url: '{!! route('rol.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
                { data: 'id', name: 'id', className:'center' },
                { data: 'codigo', name: 'codigo' },
                { data: 'medicamento', name: 'medicamento' },
                { data: 'nombre', name: 'nombre' },                   
                { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 4,
            createdCell: function (td, cellData, rowData, row, col) {
                show="{!!URL::to('/"+cellData+"')!!}";
                edit="{!!URL::to('/"+cellData+"/edit')!!}";
                deleted="{!!URL::to('/"+cellData+"')!!}";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }
        ]
    });
    
});
 </script>
@endsection