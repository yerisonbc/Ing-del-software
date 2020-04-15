@extends('User.layouts.app_user')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="title">Historial de compras</h4>						
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
                        @foreach( $productos as $producto)
                        
                                    
                            <div class="col-md-4">
                                <div class="card "  style=" margin-left:auto; margin-right: auto;">
                                    <p class="text-right" title="Eliminar Producto" style="margin:5px">	<a href="#" class=""> <i class="fas fa-times"></i> </a> </p>   
                                    <div class="card-body">

                                            <h4 class="product-name">Compra</h4>
                                            <p class="product-name"><strong>Fecha: </strong> ''</p>
                                            <p class="product-name"><strong>unidades:</strong> {{$producto->cantidad}}</p>
                                            <p class="product-name"><strong>Estado:</strong> 5 </p>
                                            <h5 class="product-price">$RD</h5>
                                            <div class="">
                                                <hr> 
                                                <a href="productos.php?id=">
                                                ver detalles
                                                </a>

                                            </div>
                                    </div>

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
                            <a href="{{route('validarCompra')}}" class="">
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