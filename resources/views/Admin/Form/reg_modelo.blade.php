@extends('Admin.layouts.app')

@section('content')

<!--               Migas de pan                          -->
<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('lista_modelos')}}">Modelos</a></li>
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

            <h2 class="text-center p-3">Agregar un nueva Modelo</h2>
           
            <form action="{{route('modelo')}}" method="POST">

                @csrf
                <div class="row p-3">
                    <div class=" col-12 col-sm-6 ">
                        <div class="form-group ">
                            <label for="">Marca<span style="color:red">*</span></label>
                            <select id="id_marca" name="id_marca"  class="form-control" autofocus   onchange= "MarcaText()" >
                                @foreach ($marcas as $marca)
                                    @if($marca->id == old('id_marca'))
                                        <option value="{{$marca->id}}" selected>{{$marca->marca}} </option>    
                                    @else
                                    <option value="{{$marca->id}}" >{{$marca->marca}} </option>  
                                    @endif  
                                @endforeach
                            </select>   
                        </div>
                    </div>
                    <div class=" col-12 col-sm-6 ">
                    
                        <label >Modelo <span style="color:red">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span id="marca" class="input-group-text bg-white " ></span>
                            </div>
                            <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo"  maxlength="25"  value='{{old("modelo")}}'>
                        </div>
                        @error('modelo')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>

                    <div class=" col-12 col-sm-6">
                        <div class="form-group ">
                            <label>Categoría<span style="color:red">*</span></label>
                            <select class="form-control" name="id_categoria">
                                @foreach ($categorias as $categoria)
                                    @if($categoria->id == old('id_categoria'))
                                    <option value="{{$categoria->id}}" selected >{{$categoria->categoria}}</option>
                                    @else
                                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class=" col-12 col-sm-6">
                        <div class="form-group ">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control @error('descripcion')is-invalid @enderror" maxlength="25" reuired name="descripcion" value="{{old('descripcion')}}"  >
                        </div>
                        @error('descripcion')
                            <p class="text-danger"> {{ $message}} </p> 
                        @enderror
                    </div>

                </div>

                <p class="text-center p-3"><button type="submit" class="btn btn-theme">Agregar Modelo</button></p>
                <p class="text-center title">
                    Los Campos marcados con <span style="color:red">*</span> son obligatorios
                </p>
            </form>

        </div>

@endsection


@section('scripts')

<script>

function MarcaText(){

    var marcaText = document.getElementById('id_marca').options[id_marca.selectedIndex].innerText;
    document.getElementById('marca').textContent = marcaText


console.log(marcaText
);
}


$(document).ready(function() {
    
    MarcaText();
});

</script>

@endsection