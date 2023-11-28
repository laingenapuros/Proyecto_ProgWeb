<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Admin</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('plant/images/logo.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('plant/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('plant/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('plant/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('plant/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('plant/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plant/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('plant/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('plant/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Roboto+Slab:wght@100;200;400&display=swap" rel="stylesheet">
    <link rel="icon"  type="image/png" href="plant/images/logo.png">
</head>

<body>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                           
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        
                        <ul class="nav-right">
                            <li class="header-notification">
                                  
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{asset('plant/images/usuario.png')}}" class="img-radius" alt="User-Profile-Image">
                                        @auth
                                        <span id="more-details">{{Auth::user()->name}}  <i class="fa fa-caret-down"></i></span>
                                        @endauth
                                   
                                </a>

                                <ul class="show-notification profile-notification">
                                <li class="waves-effect waves-light">
                                <a href="/empleado/create">
                                            <i class="ti-user"></i> Agregar Empleado
                                        </a>
                                    </li>
                                <li class="waves-effect waves-light">
                                        <a href="/admin/create">
                                            <i class="ti-user"></i> Agregar Admin
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                    <a href="/compra/create">
                                            <i class="ti-settings"></i> Agregar Compra
                                        </a>
                                    </li>
                                    
                                    <li class="waves-effect waves-light">
                                        <a href="/admin">
                                            <i class="ti-layout-sidebar-left"></i> Regresar
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="/">
                                            <i class="ti-layout-sidebar-left"></i> Salir
                                        </a>
                                    </li>
                                    
                                
                                </ul>
                    </div>
                </div>
            </nav>
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Inicio</h5>
                                             <img  class="img-fluid" align="left" width="80" height="80" src="{{asset('plant/images/logo.png')}}" alt="Theme-Logo"  height="20px"> <p class= "welcome">  Bienvenido a Hogaza</p>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!--AQUÍ IBA LO RECORTADO-->
                        @auth
                        <h1 class="text-center" > Bienvenido administrador  {{Auth::user()->name}}</h1>
                        @endauth
                    
                        <div class="col-md-12">
                            <h3 class="text-center">Vista de administradores </h3>
                            
                           
                            
                            <p class="text-center">  <img  width="30" height="30" src="{{asset('plant/images/usuario.png')}}" /> Nombre admin: {{$admin -> nombre}}  </p>
                            <p class="text-center"> <img  width="30" height="30" src="{{asset('plant/images/email.png')}}" /> Correo Admin: {{ $admin->correo }}</p>  </h2>
                             
                            <div class="shows"> 
                            <h5 class="text-center" >Empleados:</h5>
                            <ul>
                            @foreach ($admin -> empleados as $empl)
                                <li > <img  width="30" height="30" src="{{asset('plant/images/empl.png')}}" /> - {{ $empl -> nombre}}</li>
                            @endforeach
                           </ul>

                           <ul>
                             @foreach ($admin -> compras as $com)
                            <h5 class="text-center" > Compras:  </h5>
                                <li> <img  width="30" height="30" src="{{asset('plant/images/shop.png')}}" /> {{ $com ->identificador}}
                                <li> {{ $com ->parrafo}}
                                </li>
                            @endforeach
                        </ul>
                        @auth
                        <h3>Archivos del administrador {{Auth::user()->name}} </h3>
                        @endauth
                        <div class="contenedor-botones">
                            <img width="90" height="90" src="{{ \Storage::url ($admin->archivo_ubicacion)}}" alt=""></h3>
                        <h4>  &nbsp;  &nbsp; <img  width="30" height="30" src="{{asset('plant/images/descargable.png')}}" /><a href="{{route('admin.descarga', $admin)}}">  &nbsp; {{$admin -> archivo_nombre}}</a> </h4>
</div>
</div>
                             
</div>
                    
        <!--<li> {{$admin ->nombre}} </li> 
        <li> {{$admin ->correo}} </li>
        <li> {{$admin ->password}} </li>-->
   <br> </br>    
<p>  &nbsp; </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('plant/js/jquery/jquery.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('plant/js/jquery-ui/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('plant/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plant/js/bootstrap/js/bootstrap.min.js')}} "></script>
    <!-- waves js -->
    <script src="{{asset('plant/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('plant/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('plant/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

    <!-- menu js -->
    <script src="{{asset('plant/js/pcoded.min.js')}}"></script>
    <script src="{{asset('plant/js/vertical/vertical-layout.min.js')}} "></script>

    <script type="text/javascript" src="{{asset('plant/js/script.js')}} "></script>
</body>
</html>