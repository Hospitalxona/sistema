

@extends('layout.master')
@section('contenido')
<section class="content-header">

      <h1>
        Alta de Nuevo Usuario
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{'inicio'}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ 'usuarios' }}">Usuarios</a></li>
        <li class="active">Alta Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
         <div class="box box-info">
        <div class="box-header">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Usuario</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          <div class="col-md-3">
          </div>
            <div class="col-md-6">
<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

<br>
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
  <div class="card card-body">
 <form class="form-horizontal m-t-30" action = "{{route('guardausuario')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}
<div class="row">
          <div class="col-md-2">
<div class="form-group">
<label>No Usuario :</label>

<input type="text" class="form-control" name = 'id_usuario' value="{{$idus}}" readonly ='readonly'>
</div>
</div>
</div>



<div class="form-group">

<hr><label> Clues :</label>
 <select id="inputState" class="form-control" name="clues">
 @foreach($unidades as $uni)
            <option value = '{{$uni->id_unidad}}'>{{$uni->nom_unidad}}</option>
      @endforeach
                                        
  </select>
@if($errors->first('clues')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('clues') }}</span> </i> 
@endif



</div>




<div class="form-group">
<label for="example-email">Correo Electronico :</label>

<input type="email" id="example-email" name="correo" class="form-control" value="{{old('correo')}}" placeholder="tucorreo@gmail.com" required>
@if($errors->first('correo')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('correo') }}</span> </i> 
@endif
</div>

<div class="row">
          <div class="col-md-6">

<div class="form-group">

                                    <label>Seleccione área</label>
                                    <select id="area" class="form-control" name='area'>
                                    @foreach($areas as $ar)
            <option value = '{{$ar->nombre_area}}'>{{$ar->nombre_area}}</option>
      @endforeach
                                        
										
                                    </select>
</div>
</div>



     <div class="form-group">
     <div class="col-md-6">

                                    <label>Nombre de Usuario: </label>
                                    <input type="text" class="form-control" name = 'user' value="{{old('user')}}" required placeholder="usuario1234567890">
@if($errors->first('user')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('user') }}</span> </i> 
@endif                                
								</div>
                </div>
            

                <div class="col-md-12">
              
              <div class="form-group">
                                        <label>Escoga la foto de perfil: </label>
                                        <input type="file" name='fotoperfil' class="form-control">
                      @if($errors->first('fotoperfil')) 
    <i><span class="label label-danger label-rounded">{{ $errors->first('fotoperfil') }}</span> </i> 
    @endif      
                                    </div>	
                                    </div>
                     
  <div class="form-group">
  <div class="col-md-12">
<label>Contraseña por Defecto: <small><font color="orange">Guarde esta contraseña y elija una que recuerde! </small></font></label>
  <input type="text" class="form-control"  name="password" readonly="readonly"  value="<?php
function password_random($length=6)
{
  $charset = "abcdefghijklmnopqrstuvwxyz1234567890";
  $password="";
  for($i=0;$i<$length;$i++)
  {
    $rand = rand() % strlen($charset);
    $password .=substr($charset, $rand, 1);

  }
  return $password;

}
echo password_random(50);
?>
  
@if($errors->first('password')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('password') }}</span> </i> 
@endif   ">
     
									</div>
                  </div>
             
                              
                <input type="text" name = 'Usuario' value="Si" required hidden>
									  
<div align="center">
<input type='submit' class="btn btn-success" value = 'Guardar'>
<input type='reset' class="btn btn-warning" value = 'Limpiar'>
</div>



</form>
</div>
</div>
</div>
</div>
@stop
















