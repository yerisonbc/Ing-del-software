
@extends('admin.layouts.app')


@section('styles')
   <!-- ============================ productos Carousel ===================== -->
    <link rel="stylesheet" href="{{asset('css/User/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/User/owl.theme.default.min.css')}}"> 
    <!-- ===================================================================== -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-fileupload.css')}}" />

@endsection

@section('content')
    <!---------------------Migas de pan ---------------------------------------->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('lista_marcas')}}">Marcas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nueva Marcas</li>
            </ol>
        </nav>
        <hr>
        <br>

        @if($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
        @endif
<!-- ----------------------------------------------------------------------------- -->

            <div class="card p-3">
                <h2 class="titulo text-center ">Agregar un producto a la tienda</h2> 

                <form action="{{route('producto')}}"  enctype="multipart/form-data"  method="POST" >
                    @csrf
                    
                        <div class="container">

                            <!-- ========================= Datos Basicos  =============================-->
                            <div class="col-xs-12">
                                <legend class="p-3">Datos básicos</legend>
                            </div>
                            <div class="row p-3">
                            
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">Nombre de producto<span style="color:red">*</span></label>
                                        <input type="text" class="form-control @error('producto') is-invalid @enderror"  maxlength="25" name="producto">
                                    </div>
                                    @error('producto')
                                        <p class="text-danger"> {{ $message}} </p> 
                                    @enderror
                                </div>

                              

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">Modelo<span style="color:red">*</span></label>
                                        <select name="id_modelo" class="form-control" multiple searchable>
                                        @foreach($modelos as $modelo)   
                                            @if($modelo->id == old('id_modelo'))
                                                <option value="{{$modelo->id}}" selected >{{$modelo->modelo}}</option>
                                            @else
                                                <option value="{{$modelo->id}}">{{$modelo->modelo}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">Precio RD$ <span style="color:red">*</span> </label>
                                        <input type="text" class="form-control @error('precio') is-invalid @enderror"  maxlength="20" pattern="[0-9.]{1,20}"  name="precio">
                                    </div>
                                    @error('precio')
                                        <p class="text-danger"> {{ $message}} </p> 
                                    @enderror
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Unidades disponibles <span style="color:red">*</span></label>
                                        <input type="number" class="form-control @error('cantidad') is-invalid @enderror"  maxlength="20" name="cantidad">
                                    </div>
                                    @error('cantidad')
                                        <p class="text-danger"> {{ $message}} </p> 
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Condicion<span style="color:red">*</span></label>
                                            <select name="condicion" class="form-control">
                                                <option value="Nuevo"> Nuevo</option>
                                                <option value="Usado"> Usado</option>
                                            </select>
                                        
                                    </div>
                                    @error('cantidad')
                                        <p class="text-danger"> {{ $message}} </p> 
                                    @enderror
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Características <span style="color:red">*</span></label>
                                        <textarea type="text" required maxlength='125'class="form-control @error('caracteristica') is-invalid @enderror"  name="caracteristica"> </textarea>
                                    </div>
                                    @error('caracteristica')
                                        <p class="text-danger"> {{ $message}} </p> 
                                    @enderror
                                </div>
                                
                            </div>

                            <!-- ============= Categoria, proveedor =============================== -->
                            
                            <div class="col-xs-12 p-3">
                                <legend>Categoría, proveedor </legend>
                            </div>
                            <div class="row p-3">

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label">Categoria<span style="color:red">*</span></label>
                                            <select name="id_categoria" class="form-control" >
                                            @foreach($categorias as $categoria)   
                                                @if($categoria->id == old('id_categoria'))
                                                    <option value="{{$categoria->id}}" selected >{{$categoria->categoria}}</option>
                                                @else
                                                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                                @endif
                                            @endforeach
                                            </select>
                                        </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>Proveedor <span style="color:red">*</span></label>
                                        <select class="form-control" name="id_proveedor">
                                            @foreach ($proveedores as $proveedor)
                                                <option value="{{$proveedor->id}}" >{{$proveedor->nombre}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                        
                            </div> 
                            <!--============ Imagenes ================================= -->
                        
                            <div class="col-xs-12 p-3">
                                <legend>Imagen/Foto del producto</legend>
                                <p class="text-center title">
                                    Seleccione una imagen/foto en el siguiente campo. Formato de imágenes admitido png y jpg.
                                </p>
                            </div>

                            <div  class="col-md-12">
                                <div id="preview" class="owl-carousel owl-theme">
  
                                    
                                </div>

                            </div>

                           <p class="text-center"> <div id='no-img'class="row pb-4">
                                <div class="col-md-4"></div>

                                <div class="col-md-4">
                                    <div class="" style="width: 200px; height: 150px; pb-3">
                                        <img src="{{asset('img/noImagen.png')}}" alt="" />
                                    </div>
                                    
                                    <div class="pt-3">
                                        <span class="btn btn-theme btn-file " style="width: 200px;">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                        <input id="imagenes" type="file"  name="img[]"   accept="image/*" class="up" multiple onchange="preview()"> 
                                    </div>
                                </div>
                                
                                <div class="col-md-4"></div>
                            </div></p>
                           


                        </div>

                        <p class="text-center"><button type="submit" class="btn  btn-theme">Agregar a la tienda</button></p>




                </form>
                <p class="text-center title">
                    Los Campos marcados con <span style="color:red">*</span> son obligatorios
                </p>

<!-- <button id="btn_carousel" class="btn-default btn btn-danger" onclick="c()"></button>
<button id="btn_carousel" class="btn-default btn btn-danger" onclick="d()"></button> -->

<!-- ================================================================================================ -->


                   

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('css/bootstrap-fileupload.js')}}"></script>
<script src=" {{ asset('js/User/owl.carousel.min.js') }}" ></script>
<script>

function preview(){

         var element = document.getElementById("preview");
            while (element.firstChild) {
            element.removeChild(element.firstChild);
        }
    
    
    var imgs = document.getElementById('imagenes');
    var preview = document.getElementById('preview');
    // var noI = document.getElementById('no-img').className='hidden';
    


    
    for (var i=0; i<imgs.files.length; i++){
        
        let reader =new FileReader();
        reader.readAsDataURL(imgs.files[i]);
        reader.onload = function(e){
            
            image = document.createElement('img');
            image.src = reader.result;
            image.width ="200";
            image.maxheight ="200";
            
            preview.append(image )
            console.log(image);
        }
        
    }

// var btn = document.getElementById('btn_carousel').click();
setTimeout(c, 2000);
  
}
function d(){
    var element = document.getElementById("preview");
            while (element.firstChild) {
            element.removeChild(element.firstChild);
        }
element.className = 'owl-carousel';
}

function c(){
   

$('.owl-carousel').owlCarousel({
    center:true,
    loop:true,
    items:3,
    margin:15,

    })
}

</script>
@endsection