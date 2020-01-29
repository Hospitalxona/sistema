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
                <img src="{{asset('laravel/img/inventario.png')}}" width="80" height="80">
                    <br><br>
             

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
            <th>Descripcion</th> 
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
                url: '{!! route('tb.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
              { data: 'id_cie10', name: 'id_cie10', className:'center' },
              { data: 'codigo', name: 'codigo' },                
              { data: 'descripcion', name: 'descripcion', className:'hidden-480' },
               
            ],
    });
    
});
 </script>
@endsection

