@extends('layout.master')


@section('contenido')

     <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
               Modificación de Usuario
        <small> Hospital Municipal Xonacatlán</small>
      </h1>
   <ol class="breadcrumb">
        <li><a href="{{'inicio'}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ 'usuarios2' }}">Usuarios</a></li>
        <li class="active">Alta Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group"action = "{{route('modificausuario2')}}" method = "POST">
                 {{csrf_field()}} 

                  <label>Id Usuario</label>
                  <input type="text" class="form-control"  name = 'id_usuario' value="{{$usuarios->id_usuario}}" readonly ='readonly'>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="email" id="example-email" name="correo" class="form-control" value="{{$usuarios->correo}}" placeholder="tucorreo@gmail.com" required>

                  @if($errors->first('correo')) 
                <i><span class="label label-danger label-rounded">{{ $errors->first('correo') }}</span> </i> 
                  @endif
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>


                                <!-- select -->
                <div class="form-group">
                  <label>Seleccione área</label>
                  <select class="form-control" name='area'>
                    <option value = '{{$area}}' selected>{{$area}}></option>
                   
                  </select>
                </div>


             <h4>Nombre de Usuario</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name = 'user' value="{{$usuarios->user}}" required placeholder="usuario1234567890">
              @if($errors->first('user')) 
              <i><span class="label label-danger label-rounded">{{ $errors->first('user') }}</span> </i>@endif  

              </div>
              <br>


              <h4>Contraseña: </h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="password" class="form-control" name='password'  value="{{$usuarios->password}}" required>
              @if($errors->first('password')) 
              <i><span class="label label-danger label-rounded">{{ $errors->first('password') }}</span> </i> 
              @endif    
              </div>
              <br>

              <div class="form-group">  
 <img src = "{{asset('archivos/'.$usuarios->fotoperfil)}}" height =150 width=150>
<label>Escoga la nueva foto de perfil: </label>
<input type="file" name='fotoperfil' class="form-control">
@if($errors->first('fotoperfil')) 
<i><span class="label label-danger label-rounded">{{ $errors->first('fotoperfil') }}</span> </i> 
@endif      
</div>  

<div class="form-group">
<label>Seleccione unidad medica : </label>
<select class="custom-select col-12" id="inlineFormCustomSelect" name = 'id_unidad'>
 <option value = '{{$id_unidad}}'>{{$unidad}}</option>
 @foreach($todasdemas as $td)
      <option value = '{{$td->id_unidad}}'>{{$td->nom_unidad}}</option>
@endforeach
 </select>
</div>
                

<input type="text" class="form-control" name = 'id_trabajador' value="{{$usuarios->id_trabajador}}" required hidden>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type='reset' class="btn btn-warning">Limpiar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

@endsection 

