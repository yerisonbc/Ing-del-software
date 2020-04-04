<link rel="stylesheet" type="text/css" href="css/dropzone.min.css" />
@extends('admin.layouts.app')

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

                <form action="{{route('producto')}}"  class="dropzone" enctype="multipart/form-data"  method="POST" >
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
                                        <label class="control-label">Marca<span style="color:red">*</span></label>
                                        <select name="id_marca"  class="form-control" >
                                            @foreach ($marcas as $marca)
                                            <option value="{{$marca->id}}" >{{$marca->nombre}} </option>
                                            @endforeach
                                        </select>        
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">Modelo<span style="color:red">*</span></label>
                                        <input type="text" class="form-control" value="1"  name="id_modelo">
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
                                    <div class="form-group">
                                        <label>Categoría<span style="color:red">*</span></label>
                                        <select class="form-control" name="id_categoria"   >

                                            @foreach ($categorias as $categoria)
                                                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
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

                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <!-- <div class="form-group">
                                    <!- <input type="text" class="lb" placeholder="Selecione la imagen del producto" readonly="" class="form-control">  --> 
                                        <input id="a" type="file"  name="img[]"   accept="image/*" class="up" multiple="">  
                                </div> -->
                                <div class="fallback">
                                    <input type="file" name="file" />
                                </div>
                                


                        </div>
                    <!-- <input type="hidden"  name="admin-name" value="admin"> -->
                        <p class="text-center"><button type="submit" class="btn  btn-theme">Agregar a la tienda</button></p>
<!-- ================================================================================================================================================ -->
                <!-- <div class="d-flex justify-content-center">
                    <div class="form-group ">
                        <div class="col-md-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="default"  multiple/>
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> -->



                </form>
                <p class="text-center title">
                    Los Campos marcados con <span style="color:red">*</span> son obligatorios
                </p>

            </div>
                   

@endsection

@section('scripts')
<script type="text/javascript" src="css/dropzone.min.js"></script>
@endsection