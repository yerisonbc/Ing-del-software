
@if(isset($id) )
  
        @foreach ( $lista as $modelo)

        <td>    <input id="id_udt"   type="text" class="form-control requerido" name="id_udt" required   readonly value="{{$modelo->id}}">   </td>
        <td>    <input id="modelo_udt"   type="text" class="form-control requerido" name="modelo_udt"  autofocus maxlength="25"value="{{$modelo->modelo}}"> </td>
        <td>    <input id="descripcion_udt" type="text" class="form-control" name="descripcion_udt"  value="{{$modelo->descripcion}}">  </td>
        <td>    <select id="marca_udt" name="marca_udt"  class="form-control" > 
                    @foreach ($marcas as $marca)
                        @if($modelo->marca->id == $marca->id)
                            <option value="{{$marca->id}}" selected >{{$marca->marca}} </option>
                        @else
                            <option value="{{$marca->id}}" >{{$marca->marca}}</option>
                        @endif
                    @endforeach
                </select>   
        </td>
        <td>    <select id="categoria_udt" name="categoria_udt"  class="form-control" > 
                    @foreach ($categorias as $categoria)
                        @if($modelo->categoria->id == $categoria->id)
                            <option value="{{$categoria->id}}" selected >{{$categoria->categoria}} </option>
                        @else
                            <option value="{{$categoria->id}}"  >{{$categoria->categoria}} </option>
                        @endif
                    @endforeach
                </select>   
        </td>
       
        <td>    <input id="estado_udt"  type="text" class="form-control" name="estado_udt" readonly  value="{{$modelo->estado}}">  </td>
        
        <td >
            <a id='udt_s' href='udt.php?id={{$modelo->id}}'  class='btn btn-theme btn-xs '>
                <i class="fas fa-check"></i>
            </a>   

            <a id='delete' class='btn btn-theme04 btn-xs dlt' href='ud_modelos.php?id="{{$modelo->id}}"' >
                <i class='far fa-trash-alt'></i>
            </a>
            
        </td>
        

        @endforeach

@else


<div class="table-responsive">
    <table class="table table-striped" >

        @if(isset($busqueda))
            <p class="pl-3">Resultados de: {{$busqueda}}</p>
        @endif

        <thead>
            <tr>
                <th>Código</th> 
                <th>Modelo</th> 
                <th>Descripción</th> 
                <th>Marca</th> 
                <th>Estado</th> 
                <th></th>
            </tr>
        </thead>

        <tbody>

        @foreach ($lista as $modelo)
            <tr class="{{$modelo->id}}">
            
                <td>{{$modelo->id}}</td>
                <td>{{$modelo->modelo}}</td>
                <td>{{$modelo->descripcion}}</td>
                <td>{{$modelo->marca->marca}}</td>
                <td>{{$modelo->estado}}</td>
                <td >
                    <a id='edit' href='udt.php?id={{$modelo->id}}'  class='btn btn-theme btn-xs '>
                        <i class='fas fa-edit'></i>
                    </a> 

                    @if( $modelo->estado == 'A')
                    <a  id='delete' class='btn btn-theme04 btn-xs '  href='udt.php?id={{$modelo->id}}' >
                        <i class='far fa-trash-alt'></i>
                    </a>
                    @else
                    <a id='delete' href='udt.php?id={{$modelo->id}}'  class='btn btn-success btn-xs '>
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