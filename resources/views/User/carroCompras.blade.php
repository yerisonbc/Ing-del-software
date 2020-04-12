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

                <div class="col-md-9">
                     <div class="row">
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
                                                <img src="{{asset('img/User/shop02.png')}}" style=" height:100%; width:100%;" >
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Celulares</p>
                                            <h3 class="product-name"><a href="#">Iphone 11 </a></h3>
                                            <h4 class="product-price">50,000 RD$</h4>
                                            <div class="">
                                                <h5>unidades: 5</h5>
                                            </div>
                                        </div>
                                            
                                    </a>
                                </div> 
                            </div>
					 </div>
                </div>
                

				<div class="col-xs-12 col-md-3 pull-right"  style=" ">
                    <div class="card card-default">
                        <div class="card-body">
    
                            <h5> <span>   <i class="fas fa-shopping-bag"></i> productos: 1  </span> </h5>
                            <h5> <span>  Sub-total: 158,000 RD$  </span> </h5>
                            <h5> <span>   <i class="fas fa-truck"></i> Envio: Gratis  </span> </h5>
                            <hr>
                            <h5>Total: 158,000 RD$ </h5>
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