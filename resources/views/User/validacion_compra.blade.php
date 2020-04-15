@extends('User.layouts.app_user')

@section('content')
<form action="{{route('comprar')}}" method="post">
    @csrf
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

<!--===================================================== direcion ============================================= -->
<div class="section" >
        
         <div class="container" >

            <div class="row"  style="margin-left:auto; margin-right: auto;" >
                    <div class="col-12">
                        <h4>Datos de la compra</h4>
                        <hr>
                    </div>
                
                 <div class="col-md-6">

                    <div class="card card-default">
                        <div class="card-header" style="background:#fff;">
                            <h4 style="color:#64dd17;">Datos del Envio</h4>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Calle<span style="color:red" >*</span></label >
                                            <input   class="form-control"  type="text" placeholder="Calle" name="calle" >
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Numero<span style="color:red">*</span></label>
                                            <input  class="form-control"  type="text" placeholder="Numero" name="numero">
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating p">
                                            <label class="control-label pr-3">Sector<span style="color:red">*</span></label>
                                            <input  class="form-control pr-3"  type="text" placeholder="sector" name="sector">
                                        
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Municipio<span style="color:red">*</span></label>
                                            <select name="id_municipio" class="form-control"  searchable>
                                                @foreach($municipios as $municipio)   
                                                    @if($municipio->provincia_id== old('id_municipio'))
                                                        <option value="{{$municipio->provincia_id}}" selected >{{$municipio->nombre}}</option>
                                                    @else
                                                        <option value="{{$municipio->provincia_id}}">{{$municipio->nombre}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label">Provincia<span style="color:red">*</span></label>
                                            <select name="id_provincia" class="form-control" searchable>
                                            @foreach($provincias as $provincia)   
                                                @if($provincia->provincia_id == old('id_provincia'))
                                                    <option value="{{$provincia->provincia_id}}" selected >{{$provincia->nombre}}</option>
                                                @else
                                                    <option value="{{$provincia->provincia_id}}">{{$provincia->nombre}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Telefono<span style="color:red">*</span></label>
                                            <input class="form-control"  type="text" placeholder="telefono" name="tele"  >
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Celular</label>
                                            <input class="form-control"  type="text" placeholder="celular" name="celular" >
                                        </div>  
                                    </div>

                                    <div class="col-md-12">
                                        <p class="text-center"><button type="submit"  style="background:#64dd17; color:#FFF" class="btn btn-default">Comprar</button></p>

                                    </div>

                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                      
                
                <div class="col-md-3">

                    <div class="card card-default">
                        <div class="card-header"  style="background:#FFF ">
                            <h4  style="color:#64dd17;">Pago</h4>
                        </div>

                        <div class="card-body">

                                <div class="checkbox">
                                    <label><input class="active" type="checkbox" value="">En la entrega <i class="fas fa-home"></i></label>
                                </div>

                                <div class="checkbox disabled">
                                    <label><input type="checkbox" value="" disabled>Tarjeta <i class="far fa-credit-card"></i> </label>
                                </div>
                                <div class="checkbox disabled">
                                    <label><input type="checkbox" value="" disabled>Paypal <i class="fab fa-paypal"></i></label>
                                </div>                              
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
                
<form action="" method="post">
@endsection



