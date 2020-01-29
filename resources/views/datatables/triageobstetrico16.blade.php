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
                                    <li class="breadcrumb-item active" aria-current="page">Triage Obstetrico 217B20000-203-16 </li>
                                </ol>
                            </nav>
                        </div>
                    </div>


        <div class="col-5 align-self-center">
                        <center><h3 class="page-title">Triage Obstetrico 217B20000-203-16</h3></center>
          </div>
                <center>
                   <img src="{{asset('laravel/img/triage166.png')}}" width="110" height="110">
                    <br><br>

             <a type="button"  href="{{ 'altato16' }}" class="btn btn-primary">Crear Triage Obstetrico 217B20000-203-16</a>
              <center>

                </div>
            </div>

             
@endsection

                       
                    <!-- /# column -->
            


@section('contenido')


<br>
         <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Resultado Solicitud Laboratorio</div>
                    <div class="panel-body">
                        <table id="users" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Paterno</th>
                                <th>Fecha de Creación</th>
                                <th>Codigo</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('laravel/js/lib/dataTables/datatables.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                     processing: true,
                     bAutoWidth: false,
                    "ajax": "{{ url('api/triageobstetrico16') }}",
                    "columns": [

                        {data: 'Folio'},
                        {data: 'Nombre'},
                        {data: 'Apellido_P'},
                        {data: 'Apellido_M'},
                        {data: 'Fecha_Elaboracion'},
                        {data: 'Codigo'},
                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="50">50</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
                });
            });
        </script>
@endsection

