@extends('User.layouts.app_user')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="title">Carrito de Compras</h4>						
					</div>
                </div>

                @if(session('carrito')->count() == 0)
                <div class="col-12">
                    <div class="alert alert-info" id="myAlert">
                        <button type="button" class="close">&times;</button>
                        <strong>Carrito!</strong> No cuentas con productos en tu carrito !.
                    </div>
                </div>
                @endif
                <div class="col-md-9">
                     <div class="row">
                        <?php $total=0 ?>
                        @foreach( session('carrito') as $producto)
                        
                        <?php $total = $producto->productos['precio'] + $total ?>

                            <div class="col-md-4">
                                <div class="product "  style=" margin-left:auto; margin-right: auto;">
                                    <p class="text-right" title="Eliminar Producto" style="margin:5px">
                                        <a href="#" class=""> 
                                            <i class="fas fa-times"></i>
                                        </a> 
                                    </p>
                                    <a href="#">
                                        <div class="" style=" margin-left: auto; margin-right: auto;width:180px;height:200px">
                                            <div class="product-img" style=" width:100%; height:100%">
                                                <img src="{{asset($producto->productos['fotos'][0]['foto'])}}" style=" height:100%; width:100%;" >
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$producto->productos['modelo']['categoria']['categoria']}}</p>
                                            <h4 class="product-price">{{$producto->productos['producto']}}</h4>
                                            <h3 class="product-name"><a href="#">{{$producto->productos['precio']}}</a></h3>
                                            <div class="">
                                                <h5>unidades: {{$producto->cantidad}}</h5>
                                                
                                            </div>
                                        </div>
                                            
                                    </a>
                                </div> 
                            </div>
                        @endforeach
					 </div>
                </div>
                

				<div class="col-xs-12 col-md-3 pull-right"  style=" ">
                    <div class="card card-default">
                        <div class="card-body">
    
                            <h5> <span>   <i class="fas fa-shopping-bag"></i> productos: {{session('carrito')->count()}}  </span> </h5>
                            <h5> <span>  Sub-total: {{$total}} RD$  </span> </h5>
                            <h5> <span>   <i class="fas fa-truck"></i> Envio: Gratis  </span> </h5>
                            <hr>
                            <h5>Total: {{$total}} RD$ </h5>
                            <a href="compras.php?productos" class="">
                                <p class="text-center">
                                    <button type="submit" style="background:#64dd17; color:#FFF" class="btn btn-default">
                                        Comprar
                                    </button>
                                </p>
                            </a>
                        </div>

                    </div>
                </div>

        </div>
    </div>
</div>

@endsection