<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon3.ico')); ?>"/>
   <title>Hospital Municipal "Vicente Guerrero" Xonacatlan</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/lib/bootstrap/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/lib/font-awesome/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/lib/ionicons/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/lib/admin_lte/adminlte.min.css')); ?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/lib/admin_lte/skins/skin-blue.min.css')); ?>">
  <!--Estilo Personalizado CSS -->  
  <link rel="stylesheet" href="<?php echo e(asset('laravel/css/style.css')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?php echo $__env->yieldContent('css'); ?>

  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
          'url' => URL::to('/'),
      ]); ?>;
  </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e('sistema_inicio'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo e(asset('laravel/img/medicina.png')); ?>" width="40" height="40"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b>HMXVGB</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo e(asset('img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        
                      </h4>
                      <!-- The message -->
                    
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
             
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo e(asset('laravel/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo e(Session::get('sesionname')); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo e(asset('laravel/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo e(Session::get('sesionname')); ?><br> <?php echo e(Session::get('sesiontipo')); ?>

                  <small></small>
                </p>
              </li>
              <!-- Menu Body
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>-->
                <!-- /.row -->
              <!-- </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(route('cerrarsesion')); ?>" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
                  <form id="logout-form" action="<?php echo e(route('cerrarsesion')); ?>" method="get" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('laravel/img/user2-160x160.jpg')); ?>">
        </div>
        <div class="pull-left info">
         <p> <?php echo e(Session::get('sesionname')); ?> </p >
         <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>Activo - <?php echo e(Session::get('sesiontipo')); ?></a>
        </div>
      </div>

      <!-- search form (Optional) 

       /.search form -->


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
    <?php if(Session::get('sesiontipo')=="Administrador"): ?>
        <!-- Optionally, you can add icons to the links -->
       <li class="treeview"><a href="#"><img src="<?php echo e(asset('laravel/img/hospital.png')); ?>" width="20" height="20"><span> Sistema</span>
         <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
           <ul class="treeview-menu">
<li><a href="<?php echo e('usuarios'); ?>"><img src="<?php echo e(asset('laravel/img/usuario.png')); ?>" width="20" height="20"> Usuarios </a></li>
<li><a href="<?php echo e('trabajadores'); ?>"><img src="<?php echo e(asset('laravel/img/trabajo-en-equipo.png')); ?>" width="20" height="20"> Trabajadores</a></li>
<li><a href="<?php echo e('pacientes'); ?>"><img src="<?php echo e(asset('laravel/img/paciente.png')); ?>" width="20" height="20"> Pacientes</a></li>
<li><a href="<?php echo e('inventarios'); ?>"><img src="<?php echo e(asset('laravel/img/Medicamentos.png')); ?>" width="20" height="20"> Inventario Medicamento</a></li>
<li><a href="<?php echo e('recetamedicafarm'); ?>"><img src="<?php echo e(asset('laravel/img/farmaceutico.png')); ?>" width="20" height="20"> Receta Medica</a></li>
          </ul>
       </li>


    <li class="treeview"><a href="#"><img src="<?php echo e(asset('laravel/img/ambulancia.png')); ?>" width="20" height="20"><span> Urgencias</span>
         <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
           <ul class="treeview-menu">
          <li class="treeview">
            <a href="#">
              <img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="20" height="20"> Receta Medica
            </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="<?php echo e('recetamedica'); ?>">
                      <img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="20" height="20"> Con expediente
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo e('recetapoblacion'); ?>">
                      <img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="20" height="20"> A poblacion abierta
                    </a>
                  </li>
                </ul>
          </li>
          <li><a href="<?php echo e('historiaclinicageneral'); ?>"><img src="<?php echo e(asset('laravel/img/libro.png')); ?>" width="20" height="20"> Historia Clinica General</a></li>
          <li><a href="<?php echo e('notasevolucion'); ?>"><img src="<?php echo e(asset('laravel/img/resultados-medicos.png')); ?>" width="20" height="20"> Notas de Evolucion</a></li>
          <li><a href="<?php echo e('estudiogabinete'); ?>"><img src="<?php echo e(asset('laravel/img/electrocardiograma.png')); ?>" width="20" height="20"> Estudio de Gabinete</a></li>

         <li><a href="<?php echo e('solicitudlaboratorio'); ?>"><img src="<?php echo e(asset('laravel/img/laboratorio.png')); ?>" width="20" height="20"> Solicitud de Laboratorio</a></li>
         <li><a href="<?php echo e('hojaII'); ?>"><img src="<?php echo e(asset('laravel/img/electrocardiograma.png')); ?>" width="20" height="20"> Solicitud de Laboratorio <br>&nbsp &nbsp &nbsp &nbsp Valores De referencia</a></li>


          <li><a href="<?php echo e('consultaurgencia'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-libro-de-salud-96.png')); ?>" width="20" height="20"> Consulta de Urgencia</a></li>
          <li><a href="<?php echo e('consentimientoinformado'); ?>"><img src="<?php echo e(asset('laravel/img/certificado-medico.png')); ?>" width="20" height="20"> Consentimiento Informado </a></li>
            <li><a href="<?php echo e('hojatriage'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-libro-de-salud-64.png')); ?>" width="20" height="20"> Hoja de Triage</a></li>
            <li><a href="<?php echo e('triageobstetrico16'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-plan-de-tratamiento-96.png')); ?>" width="20" height="20"> Triage obstretico <br>&nbsp &nbsp &nbsp&nbsp &nbsp217B20000-203-16</a></li>

            <li><a href="<?php echo e('triageobstetrico'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-plan-de-tratamiento-96.png')); ?>" width="20" height="20"> Triage obstretico <br>&nbsp &nbsp &nbsp 217820000-203-08</a></li>
          </ul>
       </li>


        <li class="treeview">
          <a href="#"><img src="<?php echo e(asset('laravel/img/registro.png')); ?>" width="20" height="20"> <span> Archivo</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e('expedientes'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="20" height="20">Expedientes digitales</a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      
           <?php endif; ?>
      <!-- /.sidebar-menu -->
 <?php if(Session::get('sesiontipo')=="Urgencias"): ?>
        <!-- Optionally, you can add icons to the links -->



    <li class="treeview"><a href="#"><img src="<?php echo e(asset('laravel/img/ambulancia.png')); ?>" width="20" height="20"><span>Urgencias</span>
         <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
            <ul class="treeview-menu">
          <li><a href="<?php echo e('recetamedica'); ?>"><img src="<?php echo e(asset('laravel/img/historial-medico1.png')); ?>" width="20" height="20">Receta Medica</a></li>
          <li><a href="<?php echo e('historiaclinicageneral'); ?>"><img src="<?php echo e(asset('laravel/img/libro.png')); ?>" width="20" height="20">Historia Clinica General</a></li>
          <li><a href="<?php echo e('notasevolucion'); ?>"><img src="<?php echo e(asset('laravel/img/resultados-medicos.png')); ?>" width="20" height="20">Notas de Evolucion</a></li>
          <li><a href="<?php echo e('estudiogabinete'); ?>"><img src="<?php echo e(asset('laravel/img/electrocardiograma.png')); ?>" width="20" height="20">Estudio de Gabinete</a></li>
          <li><a href="<?php echo e('consultaurgencia'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-libro-de-salud-96.png')); ?>" width="20" height="20">Consulta de Urgencia</a></li>
          <li><a href="<?php echo e('consentimientoinformado'); ?>"><img src="<?php echo e(asset('laravel/img/certificado-medico.png')); ?>" width="20" height="20">Consentimiento Informado </a></li>
            <li><a href="<?php echo e('hojatriage'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-libro-de-salud-64.png')); ?>" width="20" height="20">Hoja de Triage</a></li>

             <li><a href="<?php echo e('hojatriage'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-libro-de-salud-64.png')); ?>" width="20" height="20">Hoja de Triage</a></li>
            <li><a href="<?php echo e('triageobstetrico'); ?>"><img src="<?php echo e(asset('laravel/img/icons8-plan-de-tratamiento-96.png')); ?>" width="20" height="20">Triage obstretico <br> 217820000-203-09</a></li>
          </ul>
       </li>

     <?php endif; ?>
	 
	 <?php if(Session::get('sesiontipo')=="Farmacia"): ?>
        <!-- Optionally, you can add icons to the links -->

	<li><a href="<?php echo e('recetamedicafarm'); ?>"><img src="<?php echo e(asset('laravel/img/farmaceutico.png')); ?>" width="20" height="20"> Receta Medica</a></li>
    <li><a href="<?php echo e('historiaclinicageneral'); ?>"><img src="<?php echo e(asset('laravel/img/Medicamentos.png')); ?>" width="20" height="20">Inventarios</a></li>	<span></span>
    <?php endif; ?>
	
<?php if(Session::get('sesiontipo')=="Archivo"): ?>
<li class="treeview">
          <a href="#"><img src="<?php echo e(asset('laravel/img/registro.png')); ?>" width="20" height="20"> <span> Archivo</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::action('cexpedientes@principalex')); ?>"><img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="20" height="20">Expedientes digitales</a></li>
            <li><a href="#"></a></li>
			
			<li><a href="<?php echo e(URL::action('cpoblaciones_abiertas@reportecpoblacion')); ?>"> 
				<img src="<?php echo e(asset('laravel/img/trabajo-en-equipo.png')); ?>" width="20" height="20">Poblacion Abierta
                 </a>


			</li>
			
          </ul>
          <a href="#"><img src="<?php echo e(asset('laravel/img/registro.png')); ?>" width="20" height="20"> <span> Citas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::action('CitasController@index')); ?>"><img src="<?php echo e(asset('laravel/img/icons8-carpeta-de-doctores-64.png')); ?>" width="20" height="20">Expedientes</a></li>
            <li><a href="#"></a></li>
      
          </ul>

        </li>	
		
<?php endif; ?>	
</ul>
    </section>
    <!-- /.sidebar -->
  </aside>





<!--//////////////////// MENU URGENCIAS//////////////////////////////////// -->























  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
      (Encabezado) 
    <section class="content-header">
      <h1>
       
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content container-fluid">
    
      <?php echo $__env->yieldContent('receta'); ?>

      <?php echo $__env->yieldContent('receta_medica'); ?> 
      

      <?php echo $__env->yieldContent('contenido'); ?>
      
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('laravel/js/lib/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('laravel/js/lib/bootstrap/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('laravel/js/lib/adminlte.min.js')); ?>"></script>
<!-- Bootbox -->
<script src="<?php echo e(asset('laravel/js/lib/bootbox/bootbox.min.js')); ?>"></script>
<script src="<?php echo e(asset('laravel/js/funciones.js')); ?>"></script>
<!--EasyAutocomplete-->
<?php echo $__env->yieldContent('scripts'); ?>
  <script type="text/javascript" src="<?php echo e(asset('js/complete/jquery-1.12.1.min.js')); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('js/complete/jquery-ui.css')); ?>">
  <script type="text/javascript" src="<?php echo e(asset('js/complete/jquery-ui.js')); ?>"></script>


<?php echo $__env->yieldContent('js'); ?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>