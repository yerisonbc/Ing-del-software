<link type="text/css" rel="stylesheet" href="{{asset('css/User/style.css')}}"/>
<link rel="stylesheet" href="{{asset('css/User/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/User/owl.theme.default.min.css')}}"> 

<link rel="stylesheet" href="{{asset('css/User/mystyle.css')}}">
@extends('Admin.layouts.app')

@section('content')
       <!--------------------- Migas de Pan ----------------->
        
       <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categoría</li>
            </ol>
        </nav>
        <hr>

        <h2 class="titulo text-center p-3" style=""> preview</h2>

        <!--------------------------------------- -->

<div class="container">
    <div class="col-5">
		<h2 style> <input type="text" name="Titulo" id="" class="form-control form-producto" value="Iphone 11, 128GB full, unlocked"> </h2>
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
						<div class="product-details">
							<h2 class=" text-center product-name">
                                <select name="modelo" id="" class="form-control form-producto">
                                    <option value="">Iphone 11</option>
                                </select>

                            </h2>														
                            <span>
                                color: 
                                <select name="modelo" id="" class="form-control form-producto">
                                    <option value="">Blanco</option>
                                </select>
                            </span>
								
							
							<p class="text-center">Bueno</p>
							<div class="add-to-cart">
								<div class="qty-label">
									Cantidad
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<div style="margin-left:10px;">
									<br>
								<a href="#"><button style="background:#64dd17;" class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>Comprar</button></a>
								<a href="#"><button class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>Agregar </button></a>
							</div>
						    </div>



							<ul class="product-links">
								<h5 class="text-center">Categoria:  58</h5>
	
							</ul>

							<ul class="product-links">
								<li>compartir:</li>
								<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
                    </div>
                    
                    







				</div>
			</div>
		</div>



@endsection



@section('scripts')
<script src=" {{ asset('js/User/owl.carousel.min.js') }}" ></script>
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

