@extends('User.layouts.pp')


@section('content')

<div class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="title">Resultados de: {{$busqueda}} </h4>
                        <div class="section-nav">
                            <h5> <strong>{{ sizeof($resultados)}} </strong>Resultados</h5>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">

                        @foreach($resultados as $resultado)
                            <div class="col-md-3">
                                            
                                <div class="product" style="width:250px; heigh:250px;">
                                    <a href="productos.php?id={{$resultado->id}}">
                                        <div class="product-img" style="margin-left: auto; margin-right: auto; width:10vw;">
                                            <img src="{{$resultado->fotos[0]->foto}}" style=" margin-top:5px;   width:10vw;" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{$resultado->categoria->nombre}}'</p>
                                            <h3 class="product-name"><a href="">{{$resultado->producto}}</a></h3>
                                            <h4 class="product-price">{{$resultado->precio}}</h4>
                                            
                                            <div class="product-btns">
                                                
                                                <button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Comprar</span></button>
                                                
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Comprar</button>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        @endforeach

                    </div>
                </div>
               
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->




@endsection