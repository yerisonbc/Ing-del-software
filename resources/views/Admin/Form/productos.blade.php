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
                <li class="breadcrumb-item"><a href="{{route('lista_productos')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
        <hr>

        <h2 class="titulo  p-3" style=""> Editar Producto</h2>
		<p>has click sobre la zona que deseas editar</p>
        <!--------------------------------------- -->


		
<div class="section">
		<div class="container">
			<form action="{{route('producto_update')}}" method="post" class=" form-inline">
				@csrf
				@foreach($productos as $producto)
				<div class="row">
					<div class="col-md-5 ">
						<div class="pb-2">
							<input type="text" name="titulo" id="" style="width:100%" value="{{$producto->producto}}, {{$producto->modelo->modelo}} " class="form-control">
							<input type="text" name="id" id="" hidden style="width:100%" value="{{$producto->id}}" class="form-control">
						</div>
						<div id="" class="card producto-img ">
							<div id="" class=" visual owl-carousel">
								@foreach($producto->fotos as $foto)
									<div class="item">  
										<p class="text-right" style="margin-right:15px"> <button class="btn" name="id_foto" value="foto->id"> <i class="fas fa-times"></i> </button> </p>
										<img src="{{asset($foto->foto)}}" alt="">
									</div>
								@endforeach
							</div>
						</div>
						
						<div id="" class=" imgl owl-carousel owl-theme">
							@foreach($producto->fotos as $foto)
								<div class="item">
									<img src="{{asset($foto->foto)}}" alt="">
								</div>
							@endforeach
						</div>
                    </div>

                	<div class="col-md-2"></div>

					<div class="col-md-4">
						<div class="card card-default">
							<div class="card-body">
								<!-- <form action="#" class="form-inline" > -->

									<div class="product-details ">

										<div class="col-md-12"> <input type="text" name="producto" class="form-control form-producto" value="{{$producto->producto}}">  </div>
										<div class="pl-4 ">

				
											<div class=" form-group p-1">
												<label class="pr-3">Modelo: </label>
												<select name="id_modelo" id="" class="form-control form-producto">
													@foreach($modelos as $modelo)
													@if($producto->modelo->id == $modelo->id)
														<option selected value="{{$producto->modelo->id}}">{{$producto->modelo->modelo}}</option>
													@else
														<option  value="{{$modelo->id}}">{{$modelo->modelo}}</option>

													@endif
													@endforeach
												</select>
											</div>
											<div class=" form-group p-1">
												<label class="pr-3">Color: </label>
												<select name="" id="" class="form-control form-producto">
													<option value="">Azul</option>
												</select>
											</div>

											<div class=" form-group p-1">
												<label class="pr-3">Estado: </label>
												<select name="" id="" class="form-control form-producto">
													<option value="">Nuevo</option>
													<option value="">Usado</option>
												</select>
											</div>
										
										
										<div class=" form-group p-1">
											<label class="pr-3">Cantidad: </label>
											<input type="number" name="cantidad" id="" class="form-control pl-2" style="width:30%" value="{{$producto->cantidad}}">
											<label class="pl-2"> Disponible: <strong> #</strong>  </label>
										</div>
										</div>

										<div class="add-to-cart">
											<div style="">
											<br>
												<a href="#" style="width:40%"><button  type="submit" style="background:#4ecdc4; " class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>  Guardar</button></a>
												<a href="#"><button class="add-to-cart-btn"><i class="fas fa-shopping-bag"></i>Eliminar </button></a>
											</div>
						    			</div>

										<ul class="product-links">
											<select name="id_categoria" id="" class="form-control">
												@foreach($categorias as $categoria)
													@if($producto->categoria->id == $categoria->id)
														<option selected value="{{$producto->categoria->id}}">{{$producto->categoria->categoria}}</option>
													@else
														<option  value="{{$categoria->id}}">{{$categoria->categoria}}</option>

													@endif
												@endforeach
											</select>
										</ul>

										<ul class="product-links">
											<li>compartir:</li>
											<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul>

									</div>
								<!-- </form> -->
							</div>
						</div>
					</div>
			    </div>
				<!-- ----------------------------------- Descripcion ---------------------------------------->
				<div class="col-md-12">
						<div id="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
							</ul>
							
							<div class="tab-content">
								<div id="tab1" class="tab-pane active" >
									<div class="container">
										<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-4">
											<ul>
												
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-mobile-alt"></i></label>
													<input type="text" name="pantalla" class="form-control form-producto" placeholder="Pantalla" value="{{$producto->pantalla}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-tachometer-alt"></i></label>
													<input type="text" name="procesador" class="form-control form-producto" placeholder="Procesador:  Quento" value="{{$producto->procesador}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-cogs"></i></label>
													<input type="text" name="ram" class="form-control form-producto" placeholder="Ram:  3GB" value="{{$producto->pantalla}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-microchip"></i></label>
													<input type="text" name="Almacenamiento" class="form-control form-producto" placeholder="Almacenamiento:  128GB" value="{{$producto->pantalla}}">
												</div>
													
											</ul>
										</div>
										<div class="col-md-4">
											<ul>
												
												<div class="form-group  pb-2">
													<label class="pr-3"> <i class="fas fa-camera"></i> </label>
													<input type="text" name="camara" class="form-control form-producto" placeholder="Camara:  16 MPX" value="{{$producto->pantalla}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-battery-three-quarters"></i></label>
													<input type="text" name="bateria" class="form-control form-producto" placeholder="bateria: 100MAP " value="{{$producto->procesador}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-cogs"></i></label>
													<input type="text" name="ram" class="form-control form-producto" placeholder="Ram:  3GB" value="{{$producto->pantalla}}">
												</div>
												<div class="form-group  pb-2">
													<label class="pr-3"><i class="fas fa-microchip"></i></label>
													<input type="text" name="" class="form-control form-producto" placeholder="Almacenamiento:  128GB" value="{{$producto->pantalla}}">
												</div>
													
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
				@endforeach

			</form>
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

