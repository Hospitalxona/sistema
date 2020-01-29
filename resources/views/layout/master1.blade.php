

</html><!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   <link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon3.ico')}}"/>
   <title>Hospital Municipal "Vicente Guerrero" Xonacatlan</title>
    <!-- Custom CSS -->
    <link href="{{asset('principal/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('principal/dist/css/style.min.css')}}" rel="stylesheet">


            <!-- Bootstrap CSS -->
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>





<![endif]-->



</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{asset('principal/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{asset('principal/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{asset('principal/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{asset('principal/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                <div class="error-body text-center">
                    <h4 class="pagle-title">Bienvenido, tu sesión esta activa: </h4>
                </div>
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="" alt="user" class="rounded-circle" width="40"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href=""><i class="ti-user m-r-5 m-l-5"></i>Revisar Perfil</a>
                                <a class="dropdown-item" href=""><i class="ti-wallet m-r-5 m-l-5"></i>Cerrar Sesión</a>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">

                <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
            <div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#sidebarnav"></i>
        <div class="menu-list">
            <h4 class="card-title m-b-0">Menú</h4>

            <ul id="sidebarnav" class="sidebarnav collapse out">
                 <li data-toggle="collapse" data-target="#Sistema" class="sidebar-item collapsed active">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-vector-line"></i> <i class="mdi mdi-server"></i>
                                <span class="hide-menu">Sistema</span>
                            </a> </li>
                <ul class="sub-menu collapse" id="Sistema">
                        <li class="sidebar-item">       
                    <a href="" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi mdi-account"></i>
                                <span class="hide-menu">Usuarios</span>
                            </a></li>
                    <li class="sidebar-item">       
                    <a href="" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi mdi-worker"></i>
                                <span class="hide-menu">Trabajadores</span>
                            </a></li>
                            <li class="sidebar-item">       
                    <a href="" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi mdi mdi-hospital-building"></i>
                                <span class="hide-menu">Pacientes</span>
                            </a></li>
                </ul>
            </ul>
     </div>

      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#sidebarnav"></i>
        <div class="menu-list">
            <ul id="sidebarnav" class="sidebarnav collapse out">
                 <li data-toggle="collapse" data-target="#urgencias" class="sidebar-item collapsed active">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                           <i class="mdi mdi-vector-line"></i>   <i class="mdi mdi-ambulance"></i>
                                <span class="hide-menu">Urgencias</span>   
                            </a></li>
                <ul class="sub-menu collapse" id="urgencias">
                  <li class="sidebar-item">     <a href="" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-needle"></i>
                                <span class="hide-menu">Receta Médica</span>
                            </a></li>
                  
                    <li class="sidebar-item">       <a href="{{URL::action('chistoriaclinicageneral@principalh')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-document"></i>
                                <span class="hide-menu">Historia Clínica General</span>
                            </a></li>
                    <li class="sidebar-item">       
                    <a href="{{URL::action('cnotas@principaln')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-elevator"></i>
                                <span class="hide-menu">Notas de Evolución</span>
                            </a></li>
                            
                     <li class="sidebar-item">       
                    <a href=""class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-nest-protect"></i>
                                <span class="hide-menu">Estudio de Gabinete</span>
                            </a></li>
                      <li class="sidebar-item">       
                    <a href="" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-flask-outline"></i>
                                <span class="hide-menu">Solicitud de Laboratorio</span>    
                            </a></li>           
                             <li class="sidebar-item">       
                    <a href="{{URL::action('csolicitudlaboratorio@hojaII')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-flask"></i>
                                <span class="hide-menu">Solicitud de Laboratorio<br>Valores de Referencia</span>
                         
                            </a></li>
  <li class="sidebar-item">       
                    <a href=""class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-medical-bag"></i>
                                <span class="hide-menu">Consulta de Urgencia</span>
                            </a></li>
    <li class="sidebar-item">       
                    <a href="{{URL::action('cconsentimientoinformado@principalci')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-check"></i>
                                <span class="hide-menu">Consentimiento Informado</span>
                            </a></li>                       
<li class="sidebar-item">       
                    <a href="{{URL::action('chojatriage@principalht')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-heart-pulse"></i>
                                <span class="hide-menu">Hoja de Triage</span>
                            </a></li>
<li class="sidebar-item">       
                    <a href="{{URL::action('ctriageobstetrico16@principalto16')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-traffic-light"></i>
                                <span class="hide-menu">Triage Obstetrico<br>217B20000-203-16</span>
                            </a></li>                           
                     <li class="sidebar-item">       
                    <a href="{{URL::action('ctriageobstetrico@principalto')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-traffic-light"></i>
                                <span class="hide-menu">Triage Obstetrico<br>217B20000-203-08</span>
                            </a></li>
                            
                            
                            
                </ul>
            </ul>
     </div>
     

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#sidebarnav"></i>
        <div class="menu-list">
            <ul id="sidebarnav" class="sidebarnav collapse out">
                 <li data-toggle="collapse" data-target="#Archivo" class="sidebar-item collapsed active">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                           <i class="mdi mdi-vector-line"></i>   <i class="mdi mdi-folder-multiple"></i>
                                <span class="hide-menu">Archivo</span>   
                            </a></li>
                <ul class="sub-menu collapse" id="Archivo">
                    <li class="sidebar-item"><a href="{{URL::action('cexpedientes@principalex')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-document-box"></i>
                                <span class="hide-menu">Expedientes digitales</span>
                            </a></li>
                  
                            
                </ul>
            </ul>
     </div>

      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#sidebarnav"></i>
        <div class="menu-list">
            <ul id="sidebarnav" class="sidebarnav collapse out">
                 <li data-toggle="collapse" data-target="#urgencias" class="sidebar-item collapsed active">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                           <i class="mdi mdi-vector-line"></i>   <i class="mdi mdi-ambulance"></i>
                                <span class="hide-menu">Urgencias</span>   
                            </a></li>
                <ul class="sub-menu collapse" id="urgencias">
                       <li class="sidebar-item">        <a href="{{URL::action('crecetamedica@principalrm')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-needle"></i>
                                <span class="hide-menu">Receta Médica</span>
                            </a></li>
                    <li class="sidebar-item">       <a href="{{URL::action('chistoriaclinicageneral@principalh')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-document"></i>
                                <span class="hide-menu">Historia Clínica General</span>
                            </a></li>
                    <li class="sidebar-item">       
                    <a href="{{URL::action('cnotas@principaln')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-elevator"></i>
                                <span class="hide-menu">Notas de Evolución</span>
                            </a></li>
                            
                     <li class="sidebar-item">       
                    <a href="{{URL::action('cestudiogabinete@principaleg')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-nest-protect"></i>
                                <span class="hide-menu">Estudio de Gabinete</span>
                            </a></li>
              <li class="sidebar-item">       
                    <a href="{{URL::action('csolicitudlaboratorio@principalsl')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-flask-outline"></i>
                                <span class="hide-menu">Solicitud de Laboratorio</span>
                            </a></li>
                                 <li class="sidebar-item">       
                    <a href="{{URL::action('csolicitudlaboratorio@hojaII')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-flask"></i>
                                <span class="hide-menu">Solicitud de Laboratorio<br>Valores de Referencia</span>
                         
                            </a></li>
  <li class="sidebar-item">       
                    <a href="{{URL::action('cconsultaurgencia@principalcu')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-medical-bag"></i>
                                <span class="hide-menu">Consulta de Urgencia</span>
                            </a></li>
    <li class="sidebar-item">       
                    <a href="{{URL::action('cconsentimientoinformado@principalci')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-check"></i>
                                <span class="hide-menu">Consentimiento Informado</span>
                            </a></li>                       
                     <li class="sidebar-item">       
                    <a href="{{URL::action('chojatriage@principalht')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-heart-pulse"></i>
                                <span class="hide-menu">Hoja de Triage</span>
                            </a></li> 
                     <li class="sidebar-item">       
                    <a href="{{URL::action('ctriageobstetrico16@principalto16')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-traffic-light"></i>
                                <span class="hide-menu">Triage Obstetrico<br>217B20000-203-16</span>
                            </a></li>
                            
                     <li class="sidebar-item">       
                    <a href="{{URL::action('ctriageobstetrico@principalto')}}"class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-traffic-light"></i>
                                <span class="hide-menu">Triage Obstetrico<br>217B20000-203-08</span>
                            </a></li>
                            
                            
                            
                </ul>
            </ul>
     </div>
     

           
       
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#sidebarnav"></i>
        <div class="menu-list">
            <ul id="sidebarnav" class="sidebarnav collapse out">
                 <li data-toggle="collapse" data-target="#Archivo" class="sidebar-item collapsed active">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                           <i class="mdi mdi-vector-line"></i>   <i class="mdi mdi-folder-multiple"></i>
                                <span class="hide-menu">Archivo</span>   
                            </a></li>
                <ul class="sub-menu collapse" id="Archivo">
                    <li class="sidebar-item"><a href="{{URL::action('cexpedientes@principalex')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi mdi-file-document-box"></i>
                                <span class="hide-menu">Expedientes digitales</span>
                            </a></li>
                  
                            
                </ul>
            </ul>
     </div>
    
           
          </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
          <!--<div class="error-body text-center">
          <h5 class="error-title text-danger">Sesión activa: {{Session::get('sesionname')}}</h5>
          </div> -->
            
            <div id= 'contenido'>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            
            <br>
            @yield('contenido')
            
            </div>
            
            
            
            
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('principal/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('principal/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('principal/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('principal/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('principal/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('principal/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('principal/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('principal/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('principal/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('principal/dist/js/pages/dashboards/dashboard1.js')}}"></script>


    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>




</body>

</html>