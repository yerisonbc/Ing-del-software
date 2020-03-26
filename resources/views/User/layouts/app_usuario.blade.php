<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 

		<title>cell</title>

 	
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('css/User/bootstrap.min.css')}}">

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('css/User/slick.css')}}">
 		<link type="text/css" rel="stylesheet" href="{{asset('css/User/slick-theme.css')}}">

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('css/User/nouislider.min.css')}}">

		 <!-- Font Awesome Icon -->
		 <link rel="stylesheet" href="{{asset('css/User/font-awesome.min.css')}}">
 		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/User/style.css"/>
		
		

    </head>

	<body>
		
		<header>

			
		

			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-1 collapse">

							<div class="header-logo">
								<a href="inicio.php" class="logo">
									<h3 style="color:#fff">LOGO</h3>
								</a>
							</div>

						</div>
						
                        @guest
                        <div class="col-md-2">
                        </div>

                        @else
						<div class="col-md-2 clearfix">
                            <div class="header-ctn">
                            
                                <div class="">
                                    <a href="user.php">
                                    <i class="far fa-user"></i>
                                        <span>{{Auth()->user()->name}}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                         @endguest
						

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search" >
							
								<form action='buscar.php' method="POST">

									<select name="categoria" class="input-select">
										<option value="0">Categoria</option>
											<option value="">Celulares</option>
									</select>

									<input class="input"  name='buscar' placeholder="Buscar">
									<button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

                                @guest
                                    <div>
                                        <a href="{{route('l')}}">
                                        <i class="fas fa-sign-in-alt"></i>
                                            <span>iniciar seccion</span>
                                            
                                        </a>
                                    </div>

                                    <span style="color:#FFF">O</span>

                                    <div>
                                        <a href="#">
                                        <i class="fas fa-user-plus"></i>
                                            <span>Registrate</span>
                                            
                                        </a>
                                    </div>
                                
                                @else
                                <div>
                                    <a href="carro.php">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Tu carrito</span>
                                        <div class="qty">5</div>
                                            
                                    </a>
                                </div>
                                    

                                <div>
                                    <a  class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <i class="fas fa-sign-in-alt"></i>

                                        <span>Salir</span>
                                        
                                    </a>
                                </div>
                                
                                @endguest
                            </div>
                        </div>

								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class=""><a href="inicio.php">Inicio</a></li>
						<li><a href="buscar.php?categoria=14">Celulares</a></li>
						<li><a href="buscar.php?categoria=18">Accessorios</a></li>
						<li><a href="#">Reparaciones</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


        @yield('content');
        

        



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
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
     <script src="{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script> 

</body>

</html>