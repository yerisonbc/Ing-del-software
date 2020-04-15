@extends('User.layouts.app_user')


@section('content')



<div class=" container-fluid bg-light">
    <div div="col-12">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="row">
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

<div class="container-fluid">

      <div class="col-md-12">
          <div class="section-title">
            <h3>Categorías</h3>
            <hr>
          </div>
      </div>
      <div class="categorias owl-carousel owl-theme ">
              <div class="item">
                <a href="">
                  <div class="shop rounded-circle" style="width:15vw;">
                      <div class="shop-img" style="background-color:#003C7A">
                          <img class="rounded-circle" src="img/User/shop01.png" alt="">
                      </div>
                      
                  </div>
                  <h3 class="sub text-center">Celulares <i class="fa fa-arrow-circle-right"></i></h3>
                </a>
            </div>
            
            <!-- /shop -->
            
            <div class="item">
              <a href="" >
                <div class="shop rounded-circle" style="width:15vw;">
                    <div class="shop-img" style="background-color:#007991">
                        <img class="rounded-circle" src="img/User/shop02.png" alt="">
                    </div>
                </div>
                <h3 class="sub text-center">Celulares <i class="fa fa-arrow-circle-right"></i></h3>
              </a>
            </div>

           
            
              <div class="item">
                <a href="" >
                  <div class="shop rounded-circle" style="width:15vw;">
                      <div class="shop-img" style="background-color:#FE4A49">
                          <img class="rounded-circle" src="img/User/shop03.png" alt="">
                      </div>
                  </div>
                  <h3 class="sub text-center">Celulares <i class="fa fa-arrow-circle-right"></i></h3>
                </a>
              </div>

            
            <!-- shop -->

              <div class="item">
                <a href="" class="">
                  <div class="shop rounded-circle" style="width:15vw;">
                      <div class="shop-img">
                          <img class="rounded-circle" src="img/User/shop03.png" alt="">
                      </div>
                  </div>
                  <h3 class="sub text-center">Celulares <i class="fa fa-arrow-circle-right"></i></h3>
                </a>
              </div>
        
              <div class="item">
                <a href="">
                  <div class="shop rounded-circle" style="width:15vw;">
                      <div class="shop-img">
                          <img class="rounded-circle" src="img/User/shop03.png" alt="">
                      </div>
                  </div>
                  <h3 class="sub text-center">Celulares <i class="fa fa-arrow-circle-right"></i></h3>
                </a>
              </div>
        
      </div>
    </div>
    <!-- ============================================================================================================ -->
   
<div class="section">
  <div class="container-fluid">
    <!-- <div class="row"> -->
      <!---------------- Titulo-------------->
      <div class="col-md-12">
        <div class="section-title">
          <h3>Productos</h3>
          <hr>
        </div>
      </div>
    </div>


  <div class="container">
      
        <div class=" nuevos-productos owl-carousel owl-theme" style="padding-bottom: 50px;">

          <!-- ================Produtos=========================== -->
            <div class=" item" style="">
                    <div class="product" >
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

          <!-- ================Produtos=========================== -->
            <div class=" item">
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

          <!-- ================Produtos=========================== -->
            <div class="item">
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

          <!-- ================Produtos=========================== -->
            <div class="item">
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
      

    </div>
  <!-- </div>  -->
</div>
  

<!-- ============================================================================= -->
<div class="section">

  <div class="container-fluid">
    <div class="col-md-12">
        <div class="section-title">
          <h3>Nuevos Productos</h3>
          <hr>
        </div>
    </div>
  </div>

  <div class="container">

        <div class=" nuevos-productos owl-carousel owl-theme" style="padding-bottom: 50px;">

          <!-- =========================== Produtos ======================================-->
          @foreach($nuevosProductos as $producto)
            <div class=" item" style="">
                    <div class="product" >
                        <div>
                            <div class="product-img">
                                <img src="{{$producto->fotos[0]->foto}}" alt="">
                                <div class="product-label">
                                  <span class="new">Nuevo</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$producto->categoria->categoria}}</p>
                            <h3 class="product-price">{{$producto->modelo->modelo}}</h3>
                            <h5 class="product-name">RD$ {{$producto->precio}}</h5>

                            <div class="product-btns">
                              <button  class="btn add-to-compare"  onclick=" @guest window.location='/login'  @else addToCar({{$producto->id}}) @endguest" >
                                <!-- <a class="" href="" > -->
                                  <i class="fa fa-shopping-cart"></i> </i>
                                  <span class="tooltipp">Agregar al carrito</span>
                                <!-- </a> -->
                              </button>
                              <button class="btn add-to-compare">
                                <a class=""href="">
                                  <i class="fas fa-heart"></i>
                                  <span class="tooltipp">Agregar a Favorito</span>
                                </a>
                              </button>

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

            @endforeach
        </div>
        <!-- Carousel End -->

      

    </div>
  <!-- </div>  -->
</div>


@endsection


@section('sc')
<script>
    $(document).ready(function(){

      $('.nuevos-productos').owlCarousel({
        center:true,
        loop:true,
        items:2,
        margin:15,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        
        
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            800:{
                items:3
            },
            1000:{
                items:4
            },
            1200:{
                items:5
            },
           
            
        }
})
      
      $('.categorias').owlCarousel({
        center:true,
        loop:true,
        items:2,
        margin:15,
        autoplayTimeout:1000,
       
        
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            800:{
                items:3
            },
            1000:{
                items:4
            },
            1200:{
                items:5
            },
           
            
        }
})
      
});
</script>

<script type="" >

function addToCar(id){
  var token = '{{csrf_token()}}'

  $.ajax({

        url:"addCar",
        data: {producto: id,  _token: token},
        type: 'Post',
        datatype: 'json',
        success: function(data){
            console.log(data);
            alertSuccess();
            
        }
    });

}

</script>

@endsection