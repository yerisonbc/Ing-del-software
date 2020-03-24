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
<!-- ----------------------------------------------------------------------------- -->


                    <div class="card p-3">
                    <!-- <img src="storage/lcKMaJjghelgmhprQXbDoBMP32ZR5psgNVwypdoA.jpeg" alt=""> -->
                        

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
                                                <input type="text" class="form-control" required maxlength="25" name="producto">
                                            </div>
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
                                                <input type="text" class="form-control" value="1" required name="id_modelo">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="form-group ">
                                                <label class="control-label">Precio RD$ <span style="color:red">*</span> </label>
                                                <input type="text" class="form-control" required maxlength="20" pattern="[0-9.]{1,20}" name="precio">
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Unidades disponibles <span style="color:red">*</span></label>
                                                <input type="number" class="form-control" required="" maxlength="20" name="cantidad">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Características <span style="color:red">*</span></label>
                                                <textarea type="text" required maxlength='125'class="form-control" required="" name="caracteristica"> </textarea>
                                            </div>
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
                                
                                        <!-- <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label>Estado <span style="color:red">*</span></label>
                                                <select class="form-control" name="prod-codigoP">
                                                    <option value="">Nuevo</option>
                                                    <option value="">Usado</option>

                                                </select>
                                            </div>
                                        </div>-->
                                    </div> 
                                    <!--============ Imagenes ================================= -->
                                
                                    <div class="col-xs-12 p-3">
                                        <legend>Imagen/Foto del producto</legend>
                                        <p class="text-center title">
                                            Seleccione una imagen/foto en el siguiente campo. Formato de imágenes admitido png y jpg.
                                        </p>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <!-- <input type="text" class="lb" placeholder="Selecione la imagen del producto" readonly="" class="form-control">  --> 
                                             <input id="a" type="file"  name="img[]"   accept="image/*" class="up" multiple="">  
                                        </div>
                                        


                                </div>
                            <!-- <input type="hidden"  name="admin-name" value="admin"> -->
                                <p class="text-center"><button type="submit" class="btn  btn-theme">Agregar a la tienda</button></p>

                        </form>
                        <p class="text-center title">
                            Los Campos marcados con <span style="color:red">*</span> son obligatorios
                        </p>

                    </div>
                   

@endsection