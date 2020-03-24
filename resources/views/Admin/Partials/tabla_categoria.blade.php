<div class="table-responsive">
    <table class="table table-striped" >

        @if(isset($busqueda))
            <p class="pl-3">Resultados de: {{$busqueda}}</p>
        @endif

        @if(isset($id))
            <tr class="">
                <form action="" method="post">

                @foreach ($lista as $categoria)
                <td> {{$categoria->id}}</td>
                <td>    <input type="text" class="form-control" name="categoria" required autofocus maxlength="10"value="{{$categoria->categoria}}"> </td>
                <td>    <input type="text" class="form-control" name="descripcion"  value="{{$categoria->descripcion}}">  </td>
                <td>{{$categoria->estado}}</td>
                <td >
                    <a id='update' href='udt.php?id={{$categoria->id}}'  class='btn btn-theme btn-xs '>
                        <i class="fas fa-check"></i>
                    </a>                     
                    <a class='btn btn-theme04 btn-xs dlt' href='ud_marcas.php?id="{{$categoria->id}}"' >
                        <i class='far fa-trash-alt'></i>
                    </a>
                    
                </td>

                @endforeach
                </form>
            </tr>

        
        @else


        <thead>
            <tr>
                <th>Código</th> 
                <th>Categoría</th> 
                <th>Descripción</th> 
                <th>Estado</th> 
                <th></th>
            </tr>
        </thead>

        <tbody>
        @foreach ($lista as $categoria)
            <tr class="{{$categoria->id}}">
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->categoria}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>{{$categoria->estado}}</td>
                <td >
                    <a id='update' href='udt.php?id={{$categoria->id}}'  class='btn btn-theme btn-xs '>
                        <i class='fas fa-edit'></i>
                    </a> 
                    <a class='btn btn-theme04 btn-xs dlt' href='ud_marcas.php?id="{{$categoria->id}}"' >
                        <i class='far fa-trash-alt'></i>
                    </a>
                </td>
            </tr>
        
        @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer">
    {{ $lista->links()  }}
</div>
@endif