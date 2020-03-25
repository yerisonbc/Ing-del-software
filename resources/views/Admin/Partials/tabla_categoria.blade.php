





<div class="table-responsive">
    <table class="table table-striped" >

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
            <tr class="{{$categoria->id}}">
            
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->categoria}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>{{$categoria->estado}}</td>
                <td >
                    <a id='edit' href='udt.php?id={{$categoria->id}}'  class='btn btn-theme btn-xs '>
                        <i class='fas fa-edit'></i>
                    </a> 

                    @if( $categoria->estado == 'A')
                    <a  id='delete' class='btn btn-theme04 btn-xs '  href='udt.php?id={{$categoria->id}}' >
                        <i class='far fa-trash-alt'></i>
                    </a>
                    @else
                    <a id='delete' href='udt.php?id={{$categoria->id}}'  class='btn btn-success btn-xs '>
                        <i class="fas fa-check"></i>
                    </a>                     
                    @endif
                    
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