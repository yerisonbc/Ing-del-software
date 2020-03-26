
@if(isset($id))
        
        @foreach ($lista as $marca)

        
        <td>    <input id="id_udt"   type="text" class="form-control" name="id_udt" required   readonly value="{{$marca->id}}">   </td>
        <td>    <input id="marca_udt"   type="text" class="form-control" name="marca_udt" required autofocus maxlength="10"value="{{$marca->nombre}}"> </td>
        <td>    <input id="descripcion_udt" type="text" class="form-control" name="descripcion_udt"  value="{{$marca->descripcion}}">  </td>
        <td>    <input id="estado_udt"  type="text" class="form-control" name="estado_udt" readonly  value="{{$marca->estado}}">  </td>
        
        <td >
            <a id='udt_s' href='udt.php?id={{$marca->id}}'  class='btn btn-theme btn-xs '>
                <i class="fas fa-check"></i>
            </a>   

            <a id='delete' class='btn btn-theme04 btn-xs dlt' href='ud_marcas.php?id="{{$marca->id}}"' >
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
                    <th>Marca</th> 
                    <th>Descripción</th> 
                    <th>Estado</th> 
                    <th></th>

                </tr>
            </thead>

            <tbody>
            @foreach ($lista as $marca)

            <tr class="{{$marca->id}}">
                
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->nombre}}</td>
                    <td>{{$marca->descripcion}}</td>
                    <td>{{$marca->estado}}</td>
                    <td >
                        <a id='edit' href='ud_marcas.php?id={{$marca->id}}'  class='btn btn-theme btn-xs '>
                            <i class='fas fa-edit'></i>
                        </a> 

                        @if( $marca->estado == 'A')
                        <a  id='delete' class='btn btn-theme04 btn-xs '  href='ud_marcas.php?id={{$marca->id}}' >
                            <i class='far fa-trash-alt'></i>
                        </a>
                        @else
                        <a id='delete' href='udt.php?id={{$marca->id}}'  class='btn btn-success btn-xs '>
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
            
          