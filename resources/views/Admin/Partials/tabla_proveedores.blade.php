
@if(isset($id))
        
        @foreach ($lista as $proveedor)

        
        <td>    <input id="id_udt"   type="text" class="form-control" name="id_udt" required   readonly value="{{$proveedor->id}}">   </td>
        <td>    <input id="nombre_udt"   type="text" class="form-control" name="nombre_udt" required autofocus maxlength="10"value="{{$proveedor->nombre}}"> </td>
        <td>    <input id="telefono_udt" type="text" class="form-control" name="telefono_udt"  value="{{$proveedor->telefono}}">  </td>
        <td>    <input id="correo_udt"  type="text" class="form-control" name="correo_udt"  value="{{$proveedor->correo}}">  </td>
        <td>    <input id="pagina_web_udt"  type="text" class="form-control" name="pagina_udt"  value="{{$proveedor->pagina_web}}">  </td>
        <td>    <input id="pagina_web_udt"  type="text" class="form-control" name="pagina_udt" readonly  value="{{$proveedor->estado}}">  </td>
        
        <td >
            <a id='udt_s' href='udt.php?id={{$proveedor->id}}'  class='btn btn-theme btn-xs '>
                <i class="fas fa-check"></i>
            </a>   

            <a id='delete' class='btn btn-theme04 btn-xs dlt' href='ud_proveedors.php?id={{$proveedor->id}}' >
                <i class='far fa-trash-alt'></i>
            </a>
            
        </td>
        

        @endforeach

@else

<div class=" table-responsive">
           <table class="table table-striped" >
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
                    <tr class="{{$proveedor->id}}">
                        <td>{{$proveedor->id}}</td>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>{{$proveedor->correo}}</td>
                        <td>{{$proveedor->pagina_web}}</td>
                        <td>{{$proveedor->estado}}</td>
                        <td >
                            <a id="edit" href='udt_proveedor.php?id={{$proveedor->id}}' class='btn btn-theme btn-xs'>
                                <i class='fas fa-edit'></i>
                            </a> 
                            <a id="delete" class='btn btn-theme04 btn-xs' href='udt_proveedor.php?id={$proveedor->id}}' >
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