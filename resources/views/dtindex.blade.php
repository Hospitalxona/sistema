
<!DOCTYPE html>
<html>
<head>
    <title>Laravel DataTables</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/plugin/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/plugin/datatables/dataTables.bootstrap.min.css">
    <script src="js/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <table id="recetas_medicas" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>APP</th>
            <th>APM</th>
        </tr>
        </thead>
    </table>
</div>
 
<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#recetas_medicas').DataTable({
            "processing": true,
            "serverSide": true,
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
</body>
</html>