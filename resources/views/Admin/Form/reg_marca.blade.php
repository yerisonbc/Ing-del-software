
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

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <h2 class="text-center p-3">Agregar una nueva Marca</h2>

            <form action="/marca" method="post">
                @csrf
                <div class="row p-3">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="">Marca <span style="color:red">*</span> </label>
                            <input type="text" class="form-control @error('marca') is-invalid @enderror" value="{{old('marca')}}" name="marca"  autofocus >
                        </div>
                        @error('marca')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion"  value="{{old('descripcion')}}">
                        </div>
                        @error('descripcion')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>
                </div>
                <p class="text-center"><button type="submit" class="btn btn-theme">Agregar Marca</button></p>
                <p class="text-center title">
                    Los Campos marcados con <span style="color:red">*</span> son obligatorios
                </p>

            </form>

        </div>
       


    @endsection