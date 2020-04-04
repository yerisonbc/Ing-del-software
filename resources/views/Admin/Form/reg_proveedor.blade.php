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
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
                <div class="card ">

                    <h2 class="titulo text-center p-3">Agregar un nuevo proveedor</h2>

                    
                    <form action="proveedor" method="POST" >

                        @csrf
                        <div class="row p-3">

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre<span style="color:red">*</span></label>
                                    <input class="form-control @error('nombre') is-invalid @enderror" type="text" name="nombre" maxlength="25" value="{{old('nombre')}}" autofocus >
                                </div>
                                @error('nombre')
                                    <p class="text-danger"> {{ $message}} </p> 
                                @enderror
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo<span style="color:red">*</span></label>
                                    <input class="form-control @error('correo') is-invalid @enderror" type="text" name="correo" value="{{old('correo')}}"  maxlength="50">
                                </div> 
                                @error('correo')
                                    <p class="text-danger"> {{ $message}} </p> 
                                @enderror
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->
                                    <label class="control-label">Teléfono<span style="color:red">*</span></label>
                                    <input class="form-control @error('telefono') is-invalid @enderror" type="text" name="telefono"  value="{{old('telefono')}}"   maxlength="12" >
                                </div>
                                @error('telefono')
                                    <p class="text-danger"> {{ $message}} </p> 
                                @enderror
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Página Web (http://ejemplo.com)</label>
                                    <input class="form-control @error('pagina_web') is-invalid @enderror" type="url" name="pagina_web" value="{{old('pagina_web')}}">
                                </div>
                                @error('pagina_web')
                                    <p class="text-danger"> {{ $message}} </p> 
                                @enderror
                            </div>

                        </div>

                        
                        <p class="text-center"><button type="submit" class="btn btn-theme">Agregar proveedor</button></p>
                    </form>
                </div>
            
        <!-- </div>
    </div>         -->


    @endsection