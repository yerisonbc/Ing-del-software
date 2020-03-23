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
   
    <!-- <div class="row"> -->
        <div class="card">

            <h2 class="text-center p-3">Agregar una nueva categoria</h2>
           
            <form action=" /categoria" method="POST">
                @csrf
                <div class="row p-3">
                    <div class=" col-12 col-sm-6 ">
                        <div class="form-group ">
                            <label for="">Categoría<span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="categoria" required autofocus maxlength="10" >
                        </div>
                    </div>

                    <div class=" col-12 col-sm-6">
                        <div class="form-group ">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" name="descripcion"  >
                            
                        </div>
                    </div>
                </div>
                <p class="text-center p-3"><button type="submit" class="btn btn-theme">Agregar categoría</button></p>

            </form>

        </div>
    <!-- </div> -->
    @endsection