        <div class=" table-responsive">
           <table class="table table-striped" >
                @if(isset($busqueda))
                    <p class="pl-3">Resultados de: {{$busqueda}}</p>
                @endif
                <thead>
                    <tr>
                        <th>Código</th> 
                        <th>Marca</th> 
                        <th>Descripción</th> 
                        <th>Estado</th> 
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                @foreach ($lista as $marca)
                    <tr>
                        <td>{{$marca->id}}</td>
                        <td>{{$marca->nombre}}</td>
                        <td>{{$marca->descripcion}}</td>
                        <td>{{$marca->estado}}</td>
                        <td >
                            <a href='ud_marcas.php?id="{{$marca->id}}"'class='btn btn-theme btn-xs'>
                                <i class='fas fa-edit'></i>
                            </a> 
                            <a class='btn btn-theme04 btn-xs' href='ud_marcas.php?id="{{$marca->id}}"' >
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
            
          