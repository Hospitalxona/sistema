@extends('layout.master')

@section('css')
<link href="{{asset('/laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
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
                                    <li class="breadcrumb-item active" aria-current="page">Citas con expediente</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Citas Expedientes</h3></center>
                    </div>
                </div>
</div>




@endsection



@section('contenido')

    <br><br>
    
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Citas Programadas con Expediente</div>
                    <div class="panel-body">
                        <table id="tablaAjax" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Area Medica</th>
            <th>Consultorio</th>
            <th>Doctor</th>
            <th>Asistencia</th>
            <th>Acción</th>
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
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/laravel/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '{!! route('citas.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
              { data: 'id', name: 'id', className:'center' },
              { data: 'fecha', name: 'fecha' },                
              { data: 'hora', name: 'hora', className:'hidden-480' },
              { data: 'area_med', name: 'area_med' },
              { data: 'num_consul', name: 'num_consul' },
              { data: 'doctor', name: 'doctor' },
              { data: 'asistencia', name: 'asistencia' },
              { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 7,
            createdCell: function (td, cellData, rowData, row, col) {
                show="{!!URL::to('citas/"+cellData+"')!!}";
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