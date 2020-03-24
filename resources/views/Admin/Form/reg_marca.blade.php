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
        <div class="card">
            <h2 class="text-center p-3">Agregar una nueva Marca</h2>

            <form action="/marca" method="post">
                @csrf
                <div class="row p-3">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="">Nombre <span style="color:red">*</span> </label>
                            <input type="text" class="form-control" name="nombre"  autofocus  required maxlength="10">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" name="descripcion">
                        </div>
                    </div>
                </div>
            <p class="text-center"><button type="submit" class="btn btn-theme">Agregar Marca</button></p>

            </form>

        </div>
       


    @endsection