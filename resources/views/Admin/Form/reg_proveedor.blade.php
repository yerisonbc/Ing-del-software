@extends('admin.layouts.app')

    @section('content')
    <!--               Migas de pan                          -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('lista_proveedores')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nuevo Proveedor</li>
            </ol>
        </nav>
        <hr>
        <br>

        <!-- <div class="row">
            <div class="col-xs-12"> -->
                <div class="card ">

                    <h2 class="titulo text-center p-3">Agregar un nuevo proveedor</h2>

                    
                    <form action="proveedor" method="POST" >

                        @csrf
                        <div class="row p-3">

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre<span style="color:red">*</span></label>
                                    <input class="form-control" type="text" name="nombre" maxlength="25" autofocus required>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo<span style="color:red">*</span></label>
                                    <input class="form-control" type="text" name="correo" required  maxlength="50">
                                </div> 
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Teléfono<span style="color:red">*</span></label>
                                    <input class="form-control" type="text" name="telefono" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" >
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Página Web (http://ejemplo.com)</label>
                                    <input class="form-control" type="url" name="pagina_web">
                                </div>
                            </div>

                        </div>

                        
                        <p class="text-center"><button type="submit" class="btn btn-theme">Agregar proveedor</button></p>
                    </form>
                </div>
            
        <!-- </div>
    </div>         -->


    @endsection