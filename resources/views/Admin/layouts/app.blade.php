<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{Route::currentRouteName() }}</title>

    
    
    

    <!-- =============================== Fonts  ================================= -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--  ==================== Styles =========================== -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- ====================== Alertas ======================= -->
    <link rel="stylesheet" href="{{ asset('css/jquery-confirm.min.css') }}">
  
    <!-- ==================================================================================  -->
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    @yield('styles')

 
</head>

<body>
    
    <section>
        <header class="header black-bg">

            <div class="sidebar-logo">
                <div style="color:white" class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>

            <a href="{{route('inicio')}}" class="logo"> LOGO</a>
            
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
                        <a href="#">    <i class="fas fa-bell"></i> <span class="badge bg-warning">    7   </span>    </a>
                    </li>
                </ul>
                
            </div>

            <div class="" style="margin-top: 20px;" >
                <ul  class="float-right btn-logout">
                    <li><a  class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        
                     Salir   <i class="fas fa-sign-out-alt"></i>  
                     
                    </a></li>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </ul>
            </div>

        </header>
<!-- ==================================================== Barra de navegacion ========================================== -->
    <aside>

        <div id="sidebar" class="navcollapse pl-2">

            <ul class="sidebar-menu  " id="nav-accordion">

                <h3 class=" pt-3 pb-3 text-center"> HOLA {{ auth()->user()->id }}</h3>
       

                <!-- BTN inicio -->
                <li class="mt">
                    <a id='inicio' href="{{route('inicio')}}" class="">
                        <i class="fas fa-home"></i>
                        <!-- <i class="fas fa-home"></i> -->
                        <span class="fntb" >Inicio</span>
                    </a>
                </li>

                <li class="sub-menu ">
                    <a id='productos' href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-mobile-alt"></i>
                        <span class="fntb" >Productos</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="{{ route('lista_productos') }}"> <i class="fas fa-mobile-alt"></i> Productos </a></li>
                        <li><a href="{{ route('nuevo_producto') }}"> <i class="fas fa-boxes"></i> Nuevo Producto</a></li>
                        <li><a href="{{ route('lista_modelos') }}"> <i class="fas fa-shopping-basket"></i> Modelos</a></li>
                        <li><a href="{{ route('lista_categorias') }}"> <i class="fas fa-shopping-basket"></i> Categoria</a></li>
                        <li><a href="{{ route('lista_marcas') }}"> <i class="fas fa-parachute-box"></i> Marcas</a></li>
                        <li><a href="{{ route('lista_proveedores')}}"> <i class="fas fa-truck"></i> Proveedores</a></li>
                    </ul>
                </li>

              <!--   boton Reparaciones-->
                <li class="sub-menu ">
                    <a href="javascript:;" class="" onmouseover="javascript:;" >
                        <i class="fas fa-tools"></i>
                        <span class="fntb" >Reparaciones</span>
                    </a>
                    <ul class="sub">
                    
                        <li><a href="#" onclick='u()' > <i class="fas fa-mobile-alt"></i> Reparaciones </a></li>
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
                <div id="app">
                </div>

            <!-- -------------- alertas ---------------------- -->
            @include('Admin.Partials.alerts')
            <!-- -------------- alertas ---------------------- -->

            <h2>Panel de administración</h2>
           
            
            @yield('content')

 
            </section>
            
        </section>

    </aside>

    <footer class="site-footer">
      <div class="text-center">
        <p>
          © Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
     
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="buttons.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    </section>



<!-- =================================== scripts =================================================-->
    <script src="{{ asset('/js/lib-navbar/jquery-3.4.1.min.js') }}"></script>
    <script src=" {{ asset('js/app.js') }}" ></script>
    <script class="include" type="text/javascript" src="{{ asset('js/lib-navbar/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset('js/lib-navbar/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset ('js/lib-navbar/common-scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- ==================== alertas ===================================== -->
    <script src="{{ asset('js/jquery-confirm.min.js') }}"></script>

    <!-- ==================== Galeria======================== -->
    <script src="{{ asset('js/venobox.min.js') }}"></script>


    <script src="{{asset('js/my_scripts.js')}}"></script>

@yield('scripts')
</body>
</html>