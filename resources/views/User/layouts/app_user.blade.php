<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

 	<link type="text/css" rel="stylesheet" href="{{asset('css/User/style.css')}}"/>
    
    <!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- ============================ productos Carousel ===================== -->
    <link rel="stylesheet" href="{{asset('css/User/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/User/owl.theme.default.min.css')}}"> 
    <!-- ===================================================================== -->

    <link rel="stylesheet" href="{{asset('css/User/mystyle.css')}}">
 
</head>
<body>

<!-- ========================================== nav bar ================================================= -->
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">

                <div class="col-3">
                    <!-- <a class="navbar-brand collapse navbar-collapse navb" id="navbarSupportedContent"  href="inicio_user">LOGO</a> -->
                    <a href="{{route('inicio_user')}}" class="logo"><b>Tecno<span>SHOP</span></b></a>

                        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    

                    <div class=" collapse navbar-collapse col-md-2" id="navbarSupportedContent">
                        @guest
                        <div class="">
                                <a href="user.php" class="navb-a">
                                <i class="far fa-user"></i>
                                <span>Hola, Identificate</span>		
                                </a>
                            </div>

                        @else
                            <div class="">
                                <a href="user.php" class="navb-a">
                                <i class="far fa-user"></i>
                                <span>Hola Yerison Brito</span>		
                                </a>
                            </div>
                        @endguest
                    </div>
                </div>

                <div class="col-6 pb-2">
                    <form id="form_buscar" nombre='search' action="buscar" method="get">'
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <select name="" id="" class="prepend" style=" background:#F7FFF7;" >
                                    <option value="">Celulares</option>
                                    <option value="">Computadoras</option>
                                </select>
                            </div>

                            <input class="form-control" name="busqueda" type="search" placeholder="Buscar" aria-label="Search">
                            <div class="input-group-append">
                                <button stule=''class=" btn btn-search  append" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div > 

                <div class="col-3">
                    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="header-ctn">
                                <div class="pr-2">
                                <a href="{{route('carro')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Tu carrito</span>
                                    <div class="qty">5</div>
                                </a>
                                </div>
                            </div>
                        @guest
                            <div>
                                <a href="{{route('login')}}" class="navb-a">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span >Iniciar Seción</span>		
                                </a>
                            </div>
                            <span style="color:#FFF">O</span>
                            <div>
                                <a href="#" class="navb-a">
                                    <i class="fas fa-user-plus"></i>
                                    <span>Registrate</span>
                                </a>
                            </div>
                        @else
                            <div>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="navb-a">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span >Cerrar Seción</span>		
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                        @endguest
            
                    </div>
                </div>
              
          
          </div>

      </nav>
  </header>
  
  <nav id="navigation">
			<div class="container">
				<!-- <div id="responsive-nav"> -->

					<ul class="nav ">
						<li class="nav-item active"> <a class=" nav-link" href="{{route('inicio_user')}}">Inicio</a></li>
                        <li class="nav-item"> <a class=" nav-link" href="buscar.php?categoria=14">Celulares</a></li>
                        <li class="nav-item"> <a class=" nav-link" href="buscar.php?categoria=18">Accessorios</a></li>
                        <li class="nav-item"> <a class=" nav-link" href="#">Reparaciones</a></li>
					</ul>

				<!-- </div> -->
			</div>
	</nav>
  
@yield('content')



<!-- FOOTER -->
<footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Nosotros</h3>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>829-785-6438</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categorias</h3>
                            <ul class="footer-links">
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>
<!-- 
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div> -->

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Servicios</h3>
                            <ul class="footer-links">
                                <li><a href="#">Mi cuenta</a></li>
                                <li><a href="#">Carro de compras</a></li>
                                <!-- <li><a href="#">Wishlist</a></li> -->
                                <li><a href="#">Reparaciones</a></li>
                                <!-- <li><a href="#">Help</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            
        </div>
     
    </footer>
    
    
    
    <script src=" {{ asset('js/app.js') }}" ></script>
    <script src=" {{ asset('js/User/owl.carousel.min.js') }}" ></script>
 

  @yield('sc')

</body>

</html>



</body>
</html>

