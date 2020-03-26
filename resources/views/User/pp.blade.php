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
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     
 
</head>
<body>

<!-- ========================================== nav bar ================================================= -->
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark">

          <a class="navbar-brand collapse navbar-collapse" id="navbarSupportedContent"  href="#">LOGO</a>
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

                  <form id="form_buscar" class=" ">'
                      <div class="input-group">

                          <div class="input-group-prepend">
                              <select name="" id="" class="prepend">
                                  <option value="">Celulares</option>
                                  <option value="">Computadoras</option>
                              </select>
                          </div>

                          <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
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
  


<!-- ===========================================   carousel  ======================================================================== -->


  <div class=" container-fluid">
    <div div="col-12">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/user/ip11.png" class="d-block" width="100%" height="100%" alt="...">
            </div>
          <div class="carousel-item">
            <img src="img/user/ip.jpg" class="d-block" width="100%" height="100%" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/user/ip11.png" class="d-block "width="100%" height="100%"  alt="...">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <br>
  <br>
<!-- =========================================================================================================================== -->


        <div class="container">
            <div class="row  pl-5">

                 <div class="p-3">
                    <a href="">
                      <div class="shop rounded-circle" style="width:15vw;">
                          <div class="shop-img">
                              <img class="rounded-circle" src="img/User/shop01.png" alt="">
                          </div>
                          <div class="shop-body">
                              <h4 style="color:#fff"> Celulares <br> <i class="fa fa-arrow-circle-right"></i></h4>
                          </div>
                      </div>
                    </a>
                </div>
                
                <!-- /shop -->
                
                <div class="p-3">
                  <a href="" >
                    <div class="shop rounded-circle" style="width:15vw;">
                        <div class="shop-img">
                            <img class="rounded-circle" src="img/User/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h4 style="color:#fff"> Celulares <br> <i class="fa fa-arrow-circle-right"></i></h4>
                        </div>
                    </div>
                  </a>
                </div>

                <!-- shop -->
                
                  <div class="p-3">
                    <a href="" >
                      <div class="shop rounded-circle" style="width:15vw;">
                          <div class="shop-img">
                              <img class="rounded-circle" src="img/User/shop03.png" alt="">
                          </div>
                          <div class="shop-body">
                              <h4 style="color:#fff"> Celulares <br>   <i class="fa fa-arrow-circle-right"></i></h4>
                          </div>
                      </div>
                    </a>
                  </div>

               
                <!-- shop -->

                  <div class="p-3">
                    <a href="">
                      <div class="shop rounded-circle" style="width:15vw;">
                          <div class="shop-img">
                              <img class="rounded-circle" src="img/User/shop03.png" alt="">
                          </div>
                          <div class="shop-body">
                              <h4 style="color:#fff"> Celulares <br> <i class="fa fa-arrow-circle-right"></i></h4>
                          </div>
                      </div>
                    </a>
                  </div>
            
          </div>
        </div>
    <!-- ============================================================================================================ -->
   
<div class="section">
  <div class="container">
    <div class="row">
<!---------------- Titulo-------------->
      <div class="col-md-12">
        <div class="section-title">
          <h3>Nuevos Productos</h3>
        </div>
      </div>

      <div class="col-md-12">
        <div class="row">

        <!-- ================Produtos=========================== -->
          <div class="products-tabs col-3 p-3">
              <div id="tab1" class="tab-pane active">
                  <div class="product">
                      <div>
                          <div class="product-img">
                              <img src="img/User/product07.png" alt="">
                              <div class="product-label">
                                <span class="new">Nuevo</span>
                              </div>
                          </div>
                      </div>
                      <div class="product-body">
                          <p class="product-category">Celulares</p>
                          <h3 class="product-name">Iphone XI</h3>
                          <h4 class="product-price">500,000 RD$</h4>
                          <div class="product-btns">
                            <button class="btn add-to-compare"><a class=""href="">
                              <i class="fa fa-shopping-cart"></i> </i>
                              <span class="tooltipp">Agregar al carrito</span>
                            </a></button>
                          </div>
                      </div>
                      <div class="add-to-cart">
                        <a class="btn add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i>
                           Comprar
                        </a>
                      </div>
                  </div>
              </div>
            </div>
<!-- ======================================== -->
        <!-- ================Produtos=========================== -->
          <div class="products-tabs col-3 p-3">
              <div id="tab1" class="tab-pane active">
                  <div class="product">
                      <div>
                          <div class="product-img">
                              <img src="img/User/product02.png" alt="">
                              <div class="product-label">
                                <span class="new">Nuevo</span>
                              </div>
                          </div>
                      </div>
                      <div class="product-body">
                          <p class="product-category">Celulares</p>
                          <h3 class="product-name">Iphone XI</h3>
                          <h4 class="product-price">500,000 RD$</h4>
                          <div class="product-btns">
                            <button class="btn add-to-compare"><a class=""href="">
                              <i class="fa fa-shopping-cart"></i> </i>
                              <span class="tooltipp">Agregar al carrito</span>
                            </a></button>
                          </div>
                      </div>
                      <div class="add-to-cart">
                        <a class="btn add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i>
                           Comprar
                        </a>
                      </div>
                  </div>
              </div>
            </div>
<!-- ======================================== -->
        <!-- ================Produtos=========================== -->
          <div class="products-tabs col-3 p-3">
              <div id="tab1" class="tab-pane active">
                  <div class="product">
                      <div>
                          <div class="product-img">
                              <img src="img/User/product01.png" alt="">
                              <div class="product-label">
                                <span class="new">Nuevo</span>
                              </div>
                          </div>
                      </div>
                      <div class="product-body">
                          <p class="product-category">Celulares</p>
                          <h3 class="product-name">Iphone XI</h3>
                          <h4 class="product-price">500,000 RD$</h4>
                          <div class="product-btns">
                            <button class="btn add-to-compare"><a class=""href="">
                              <i class="fa fa-shopping-cart"></i> </i>
                              <span class="tooltipp">Agregar al carrito</span>
                            </a></button>
                          </div>
                      </div>
                      <div class="add-to-cart">
                        <a class="btn add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i>
                           Comprar
                        </a>
                      </div>
                  </div>
              </div>
            </div>
<!-- ======================================== -->
        <!-- ================Produtos=========================== -->
          <div class="products-tabs col-3 p-3">
              <div id="tab1" class="tab-pane active">
                  <div class="product">
                      <div>
                          <div class="product-img">
                              <img src="img/User/product04.png" alt="">
                              <div class="product-label">
                                <span class="new">Nuevo</span>
                              </div>
                          </div>
                      </div>
                      <div class="product-body">
                          <p class="product-category">Celulares</p>
                          <h3 class="product-name">Iphone XI</h3>
                          <h4 class="product-price">500,000 RD$</h4>
                          <div class="product-btns">
                            <button class="btn add-to-compare"><a class=""href="">
                              <i class="fa fa-shopping-cart"></i> </i>
                              <span class="tooltipp">Agregar al carrito</span>
                            </a></button>
                          </div>
                      </div>
                      <div class="add-to-cart">
                        <a class="btn add-to-cart-btn">
                          <i class="fa fa-shopping-cart"></i>
                           Comprar
                        </a>
                      </div>
                  </div>
              </div>
            </div>
<!-- ======================================== -->




          </div>
      </div>



    </div>
  </div> 
</div>


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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>



</body>
</html>

