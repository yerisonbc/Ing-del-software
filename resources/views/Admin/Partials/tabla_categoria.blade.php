<div class="table-responsive-sm">
    <table class="table" >

        @if(isset($busqueda))
            <p class="pl-3">Resultados de: {{$busqueda}}</p>
        @endif

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
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->categoria}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>{{$categoria->estado}}</td>
                <td >
                    <a href='ud_marcas.php?id="{{$categoria->id}}"'class='btn btn-theme btn-xs'>
                        <i class='fas fa-edit'></i>
                    </a> 
                    <a class='btn btn-theme04 btn-xs' href='ud_marcas.php?id="{{$categoria->id}}"' >
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
            