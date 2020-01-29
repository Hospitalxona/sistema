@extends('layout.master')

@section('css')
<link href="{{asset('/laravel/css/lib/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('receta')
 <div class="page-breadcrumb">
                <div class="row">

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                        </div>
                    </div>
            <div class="col-5 align-self-center">
                        <center><h3 class="page-title"></h3></center>
          </div>
                <center>
                   &nbsp &nbsp &nbsp  
                    <img src="{{asset('laravel/img/excel.png')}}" width="80" height="80">
                  


                 <img src="{{asset('laravel/img/inventario.png')}}" width="80" height="80">
                    <br><br>
             <a type="button"  href="{{'excel_inventario'}}" class="btn btn-primary">Crear Reporte Excel</a>
              <center>

                </div>
            </div>




@endsection



@section('contenido')

    <br><br>
    
             <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table id="tablaAjax" class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>Id</th>
            <th>Codigo</th>
            <th>Nombre Medicamento</th> 
            <th>Existencia</th>
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
                url: '{!! route('inventarios.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
              { data: 'id', name: 'id', className:'center' },
              { data: 'medi_mat', name: 'medi_mat' },                
              { data: 'medicamento', name: 'medicamento', className:'hidden-480' },
              { data: 'existencia', name: 'existencia' },
              { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 4,
            createdCell: function (td, cellData, rowData, row, col) {
                show="{!!URL::to('inventarios/"+cellData+"')!!}";
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

