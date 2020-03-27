<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
 		<link type="text/css" rel="stylesheet" href="css/User/style.css"/>

    <link rel="stylesheet" href="{{asset('css/User/mystyle.css')}}">
 	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{asset('css/User/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/User/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/User/nouislider.min.css')}}">
     
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="{{ asset('/js/lib-navbar/jquery-3.4.1.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <script src=" {{ asset('js/app.js') }}" ></script>

     
 
</head>
<body>

<!-- ========================================== nav bar ================================================= -->
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark">

          <a class="navbar-brand collapse navbar-collapse" id="navbarSupportedContent"  href="inicio_user">LOGO</a>
          <div class="col-1">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="container">

              <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="">
                    <a href="user.php">
                      <i class="far fa-user"></i>
                      <span>Hola Yerison Brito</span>		
                    </a>
                  </div>
              </div>

              <div class="col-6">

                  <form id="form_buscar" nombre='search' action="buscar" method="get">'
                      <div class="input-group">

                          <div class="input-group-prepend">
                              <select name="" id="" class="prepend">
                                  <option value="">Celulares</option>
                                  <option value="">Computadoras</option>
                              </select>
                          </div>

                          <input class="form-control" name="busqueda" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                              <button class=" btn btn-search  append" type="submit">Search</button>
                          </div>

                      </div>
                  </form>

              </div > 

              <div class=" collapse navbar-collapse" id="navbarSupportedContent">

                <div>
                  <a href="{{route('l')}}">
                    <i class="fas fa-sign-in-alt"></i>
                    <span >iniciar seccion</span>		
                  </a>
                </div>
                <span style="color:#FFF">O</span>

                <div>
                  <a href="#">
                    <i class="fas fa-user-plus"></i>
                    <span>Registrate</span>
                      
                  </a>
                </div>

              </div>

          
          </div>

      </nav>
  </header>
  
  <nav id="navigation">
			<div class="container">
				<!-- <div id="responsive-nav"> -->

					<ul class="nav ">
						<li class="nav-item"> <a class=" nav-link" href="inicio.php">Inicio</a></li>
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
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/slick.min.js"></script> -->
    <!-- <script src="js/nouislider.min.js"></script> -->
    <!-- <script src="js/jquery.zoom.min.js"></script> -->
    <!-- <script src="js/main.js"></script> -->

</body>

</html>



</body>
</html>

