@extends('Admin.layouts.app')

    @section('content')

        <!--------------------- Migas de Pan ----------------->
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categoría</li>
            </ol>
        </nav>
        <hr>

        <h2 class="titulo text-center p-3" style=""> Lista Categoría</h2>
        <div class="card "  >

        <!--------------------------------------- -->

        <div class="card-header " > 
            <div class="container pt-3">
                <div class="row">

                    <div class="col-12 col-md-4 pt-2">
                        <a href="{{route('nueva_categoria')}}" class="btn btn-theme "> Nueva Categoría</a>
                    </div>

                    <div class="col-12 col-md-4  pt-2">

                        <select class="form-control"  id="filtro" onchange="search()" style="" name="">
                            <option value="a">Activos</option>
                            <option value="i">Inactivos</option>
                        </select>

                    </div>
                        
                    <div class=" col-12 col-md-4 pt-2">

                        <div class="input-group ">
                            <input id="buscar"  name="buscar" onkeyup="search()"  type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-theme" onclick="search()"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <br>

        <div class="users">
            @include('Admin.Partials.tabla_categoria')
        </div>

    </div>

@endsection

@section("scripts")
 
    <script src="{{asset('js/my_scripts.js')}}"></script>
    <script>

        var route = "http://127.0.0.1:8000/lista_categorias"; 
        var timer;

        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            var p = $(this).attr('href').split('page=')[1];
            pagination(p);         

        });


        function search() {
            clearTimeout(timer);
            timer = setTimeout(buscar, 1000);
        }


    
        $(document).on('click', '#update', function(e){ 
            
            e.preventDefault();  
            var id = $(this).attr('href').split('id=')[1];
       
            $.ajax({
            url:route,
            data: {id: id},
            type: 'GET',
            datatype: 'json',
            success: function(data){
                // console.log(data);
                $("."+id).html(data);
            }
        });
                
        });

    
    </script>


@endsection