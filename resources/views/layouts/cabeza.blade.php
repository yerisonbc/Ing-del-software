<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KLK</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- ==================================================================================  -->
    
    <script src="{{ asset('/js/lib-navbar/jquery-3.4.1.min.js') }}"></script>
    
</head>
<style>


</style>


<body>
    <section>
        <header class="header black-bg">

            <div class="sidebar-logo">
                <div style="color:white" class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>

            <a href="#" class="logo"> <img src="{{ asset('img/logo/favicon-32x32.png')}}"  class="p-1 rounded-circle "  alt="logo"></a>
            
            <!--                   Notificaciones            -->
            <div class="nav notify-row" id="top_menu">

                <ul class="nav top-menu">

                    <li>
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fa fa-bell-o"></i>
                     <span class="badge bg-warning">7</span>
                            

                        </a>
                    </li>
                </ul>
                
            </div>

            <div class="" style="margin-top: 20px;" >
                <ul  class="float-right btn-logout">
                    <li><a  class="logout" href="#">  Salir   <i class="fas fa-sign-out-alt"></i>  </a></li>
                </ul>
            </div>

        </header>
<!-- ==================================================== Barra de navegacion ========================================== -->
    <aside>

        <div id="sidebar" class="navcollapse">

            <ul class="sidebar-menu  " id="nav-accordion">

                <h3 class=" pt-3 pb-3 text-center"> HOLA </h3>

                <!-- BTN inicio -->
                <li class="mt">
                    <a href="" class="active">
                        <i class="fas fa-home"></i>
                        <span class="fntb" >Inicio</span>
                    </a>
                </li>

                <li class="sub-menu ">
                    <a href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-mobile-alt"></i>
                        <span class="fntb" >Productos</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="#"> <i class="fas fa-mobile-alt"></i> Productos </a></li>
                        <li><a href="#"> <i class="fas fa-boxes"></i> Nuevo Producto</a></li>
                        <li><a href="#"> <i class="fas fa-shopping-basket"></i> Categoria</a></li>
                        <li><a href="#"> <i class="fas fa-parachute-box"></i> Fabricantes</a></li>
                        <li><a href="#"> <i class="fas fa-truck"></i> suplidores</a></li>
                    </ul>
                </li>

              <!--   boton Reparaciones-->
                <li class="sub-menu ">
                    <a href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-tools"></i>
                        <span class="fntb" >Reparaciones</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="mant_reparacion.php?menu=R"> <i class="fas fa-mobile-alt"></i> Reparaciones </a></li>
                        <li><a href="registro_reparacion.php?menu=R"> <i class="fas fa-boxes"></i> Nueva Reparacion</a></li>
                    </ul>
                </li>

                <!--     Boton Ventas -->
                <li class="sub-menu ">
                    <a href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-shopping-bag"></i>
                        <span class="fntb" >Ventas</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="mant_ventas.php?menu=V"> <i class="fas fa-mobile-alt"></i> Ventas </a></li>
                    
                    </ul>
                </li>

                <!--     Boton configuracion -->
                <li class="sub-menu ">
                    <a href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-cog"></i>
                        <span class="fntb" >Configuración</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="mant_usuarios.php"> <i class="fas fa-user"></i>Usuarios </a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </aside>

    <aside>
        <section id="main-content">
            <section class="wrapper">

            <h1>Panel de administración</h1>
            <hr>
            @yield('content')

 
            </section>
            
        </section>

    </aside>
    </section>




<script class="include" type="text/javascript" src="{{ asset('js/lib-navbar/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('js/lib-navbar/jquery.scrollTo.min.js')}}"></script>
  
  <!--common script for all pages-->
<script src="{{ asset ('js/lib-navbar/common-scripts.js')}}"></script>
</body>
</html>