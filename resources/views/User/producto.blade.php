@extends("User.layouts.app_user")


@section('content')


<div id="breadcrumb" class="section">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
                    <li><a href="inicio.php">inicio</a></li>
                    <li class="active">Productos</li>
				</ul>
			</div>
        </div>
				<!-- /row -->
	</div>
			<!-- /container -->
</div>



<div class="container">
    <div class="section-title">
		<h3>Iphone 11, 128GB fulll unlocked</h3>

    </div>
</div>
<div class="section">
			<div class="container">
				<div class="row">
			
					<div class="col-md-5 ">

						<div id="" class="card producto-img ">

							<div id="" class=" visual owl-carousel">

								<div class="item">
									<img src="img/User/product02.png" alt="">
								</div>

								<div class="item">
									<img src="img/User/product03.png" alt="" >
								</div>

								<div class="item">
									<img src="img/User/product04.png" alt="">
								</div>

								<div class="item">
									<img src="img/User/product06.png" alt="">
								</div>
							</div>
						</div>
						
						

							<div id="" class=" imgl owl-carousel owl-theme">

								<div class="item">
									<img src="img/User/product02.png" alt="">
								</div>

								<div class="item">
									<img src="img/User/product03.png" alt="" >
								</div>

								<div class="item">
									<img src="img/User/product04.png" alt="">
								</div>

								<div class="item">
									<img src="img/User/product06.png" alt="">
								</div>
							</div>

					</div>
					<div class="col-md-3"></div>

					<div class="col-md-4">
						<div class="card card-default">
							<div class="card-body">
								<form action="#" class="form-inline" >
									<div class="product-details ">
									<h2 class=" text-center product-name">Iphone 11</h2>
										<div class="pl-4">
										
										<p class="text-enter">
											Color: <strong> Azul</strong>						
										</p>
										<p class="text-cnter">
											Estado: <strong> Nuevo</strong>						
										</p>
										<div class=" form-group">
											<label class="pr-3">Cantidad: </label>
											<input type="number" name="cantidad" id="" class="form-control pl-2" style="width:30%" value="1">
											<label class="pl-2"> Disponible: <strong> 25</strong>  </label>
										</div>
										</div>

										<div class="add-to-cart">
											<div style="margin-left:10px;">
											<br>
												<a href="#"><button style="background:#4ecdc4;" class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>Comprar</button></a>
												<a href="#"><button class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>Agregar </button></a>
											</div>
						    			</div>

										<ul class="product-links">
											<h5 class="text-center">Celulares</h5>
										</ul>

										<ul class="product-links">
											<li>compartir:</li>
											<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul>

									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane active" >
									<div class="container">
										<div class="row">
											<div class="col-md-2"></div>
										<div class="col-md-4">
											<ul>
												<li><span> <strong> <i class="fas fa-mobile-alt"></i> Pantalla:  7'' </strong></span></li>
												<li><span> <strong> <i class="fas fa-tachometer-alt"></i> Procesador:  Quento </strong></span></li>
												<li><span> <strong> <i class="fas fa-cogs"></i> Ram:  3GB </strong></span></li>
												<li><span> <strong> <i class="fas fa-microchip"></i> Almacenamiento:  128GB </strong></span></li>
												<li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul>
												<li><span> <strong> <i class="fas fa-camera"></i> Camara:  16 MPX </strong></span></li>
												<li><span> <strong> <i class="fas fa-battery-three-quarters"></i> Bateria  3800 MAP </strong></span></li>
												<li><span> <strong> <i class="fas fa-sync-alt"></i> S.O.:  IOS </strong></span></li>
												<li><span> <strong> <i class="fas fa-microchip"></i> Almacenamiento:  128GB </strong></span></li>
												<li>
											</ul>
										</div>
										<div class="col-md-2"></div>

										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->




                    

                </div>    
            </div>
</div>







@endsection

@section('sc')




<script>

</script>


<script>
    $(document).ready(function (){
        


  $('.visual').owlCarousel({
        center:true,
        loop:true,
        items:1,
		URLhashListener:true,
        margin:15,
       

});

  $('.imgl').owlCarousel({

	center:true,
    loop:true,
    items:4,

});

    });
</script>
@endsection
