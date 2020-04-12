@extends('Admin.layouts.app')

    
    @section('content')

<!--               Migas de pan                          -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
    </nav>
    <hr>

    <h2 class="titulo text-center p-3" style=""> Lista Productos</h2>
            
    <!--              -->
    <div class="card "  >

        <div class="card-header " > 
            <div class="container pt-3">
                <div class="row">

                        <div class="col-12 col-md-4 pt-2">
                            <a href="{{route('nuevo_producto')}}" class="btn btn-theme "> Nuevo Producto</a>
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
            @include('Admin.Partials.tabla_productos')
        </div>

    </div>


       
    
    


    @endsection

    @section("scripts")
       
     
        <script>

            var route = "http://127.0.0.1:8000/lista_productos"; 
            var timer;

            $(document).on('click', '.pagination a', function(e){
                    
                    var p = $(this).attr('href').split('page=')[1];
                    pagination(p);         

            });


            function search() {
                clearTimeout(timer);
                
                timer = setTimeout(buscar, 1000);
            }
            $(document).ready(function(){
                $('.venobox').venobox(); 
            });
            function v(){
                $('.venobox').venobox(); 

            }
           
        </script>
   @endsection
