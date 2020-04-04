@extends('Admin.Layouts.app')

    @section('content')

        <!--               Migas de pan                          -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('lista_categorias')}}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nueva Categoría</li>
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
        <div class="card">

            <h2 class="text-center p-3">Agregar una nueva categoria</h2>
           
            <form action=" /categoria" method="POST">
                @csrf
                <div class="row p-3">

                    <div class=" col-12 col-sm-6 ">
                        <div class="form-group ">
                            <label for="">Categoría<span style="color:red">*</span></label>
                            <input type="text" class="form-control @error('categoria') is-invalid @enderror" name="categoria" require autofocus maxlength="10" >
                        </div>
                        @error('categoria')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>

                    <div class=" col-12 col-sm-6">
                        <div class="form-group ">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control @error('descripcion')is-invalid @enderror" name="descripcion" value="{{old('descripcion')}}"  >
                        </div>
                        @error('descripcion')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>
                </div>
                <p class="text-center p-3"><button type="submit" class="btn btn-theme">Agregar categoría</button></p>
                <p class="text-center title">
                    Los Campos marcados con <span style="color:red">*</span> son obligatorios
                </p>
            </form>

        </div>
    <!-- </div> -->
    @endsection