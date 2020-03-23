<div class=" table-responsive">
           <table class="table" >
                @if(isset($busqueda))
                    <p class="pl-3">Resultados de: {{$busqueda}}</p>
                @endif
                <thead>
                    <tr>
                        <th>Código</th> 
                        <th>Nombre</th> 
                        <th>Teléfono</th> 
                        <th>Correo</th> 
                        <th>Página Web</th> 
                        <th>Estado</th> 
                        <th></th>
                        
                    
                    </tr>
                </thead>

                <tbody>
                @foreach ($lista as $proveedor)
                    <tr>
                        <td>{{$proveedor->id}}</td>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>{{$proveedor->correo}}</td>
                        <td>{{$proveedor->pagina_web}}</td>
                        <td>{{$proveedor->estado}}</td>
                        <td >
                            <a href='udt_proveedor.php?id="{{$proveedor->id}}"'class='btn btn-theme btn-xs'>
                                <i class='fas fa-edit'></i>
                            </a> 
                            <a class='btn btn-theme04 btn-xs' href='udt_proveedor.php?id="{$proveedor->id}}"' >
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
            
          