@extends('layout.master')

@section('css')
<link href="{{asset('/laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('contenido')
	
         <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas</div>
                    <div class="panel-body">
                        <table id="tablaajax" class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>Fecha</th>
            <th>Hora</th>
            <th>Area</th>
            <th>Consultorio</th>
            <th>Doctor</th>
            <th>Asistencia</th>
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
<script src="{{asset('/laravel/js/lib/dataTables/datatables.min.js')}}"></script>
<script>
$(function() {
    
    $('#tablaajax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '{!! route('cita.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
                { data: 'idc', name: 'idc', className:'center' },
                { data: 'fecha', name: 'fecha' },
                { data: 'hora', name: 'hora' },
                { data: 'area_med', name: 'area_med' },
                { data: 'num_consul', name: 'num_consul' },
                { data: 'doctor', name: 'doctor' },
                { data: 'asistencia', name: 'asistencia' },                  
                { data: 'idc', name: 'idc', className:'center'}
            ],
        columnDefs: [
        {
            targets: 7,
          createdCell: function (td, cellData, rowData, row, col) {
                show="{!!URL::to('cita/"+cellData+"')!!}";
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