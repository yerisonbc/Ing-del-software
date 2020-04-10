@extends('Admin.layouts.app')


@section('content')

    <!--------------------- Migas de Pan ------------------>
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modelos</li>
            </ol>
        </nav>
        <hr>

        <h2 class="titulo text-center p-3" style=""> Lista Modelos</h2>
    <!----------------------------------------------------->
        <div class="card "  >
            <div class="card-header " > 
                <div class="container pt-3">
                    <div class="row">

                        <div class="col-12 col-md-4 pt-2">
                            <a href="{{route('nuevo_modelo')}}" class="btn btn-theme "> Nuevo Modelo</a>
                        </div>
                        <!----------------------------  Filtro Actovos/ Inactivos ----------------->
                        <div class="col-12 col-md-4  pt-2">
                            <select class="form-control"  id="filtro" onchange="search()" style="" name="">
                                <option value="a">Activos</option>
                                <option value="i">Inactivos</option>
                            </select>
                        </div>
                        <!----------------------------  Buscador  --------------------------------->
                        <div class=" col-12 col-md-4 pt-2">
                            <div class="input-group ">
                                <input id="buscar"  name="buscar" onkeyup="search()"  type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-theme" onclick="search()"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------------------------------------------------------->

                    </div>
                </div>  
            </div>
            <br>

        <div class="users">
            @include('Admin.Partials.tabla_modelos')
        </div>

    </div>

    

    <form style=" visibility: hidden;" id='form_dlt' action="modelo_delete" method="post">
        @csrf 
        <input type="text" name='id_dlt' id="id_dlt" value='5'> 
    </form>
   
    <form style=" visibility: hidden;" id='form_udt' action="modelo_update" method="post"> 

        @csrf 
        <input  id="id" type="text" class="form-control" name="id"  value="">   
        <input  id="modelo"   type="text" class="form-control" name="modelo" required > 
        <input  id="id_categoria"   type="text" class="form-control" name="id_categoria"  value=""> 
        <input  id="id_marca"   type="text" class="form-control" name="id_marca" value=""> 
        <input  id="descripcion"    type="text" class="form-control" name="descripcion"  value="">  
        <input  id="estado"   type="text" class="form-control" name="estado"  value=""> 

    </form>
    
    

@endsection

@section("scripts")
 
    <script src="{{asset('js/my_scripts.js')}}"></script>
    <script>
        var route = "http://127.0.0.1:8000/lista_modelos"; 
        
// ==================== Paginacion ==============================
        var timer;
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            var p = $(this).attr('href').split('page=')[1];
            pagination(p);         

        });
// ===============================================================


// ===================== Buscador  ===============================

        function search() {
            clearTimeout(timer);
            timer = setTimeout(buscar, 1000);
        }
// ===============================================================

    
        $(document).on('click', '#edit', function(e){ 

            e.preventDefault();
            var id = $(this).attr('href').split('id=')[1];  
            editar(id);
            
        });


// ========================= Actualizar un registro =======================================
        $(document).on('click', '#udt_s', function(e){ 
            e.preventDefault(); 

            document.getElementById("id").value =         document.getElementById("id_udt").value;
            document.getElementById("modelo").value =   document.getElementById("modelo_udt").value;
            document.getElementById("id_categoria").value =   document.getElementById("categoria_udt").value;
            document.getElementById("id_marca").value =   document.getElementById("marca_udt").value;
            document.getElementById("descripcion").value = document.getElementById("descripcion_udt").value;
            document.getElementById("estado").value =      document.getElementById("estado_udt").value;
            validarForm();
            
        });
// ==========================================================================================


        $(document).on('click', '#delete', function(e){ 
            e.preventDefault();  

            var id = $(this).attr('href').split('id=')[1];
            document.getElementById("id_dlt").value = id;
            alertDlt();
        });
       
           
            

    
    </script>


@endsection



