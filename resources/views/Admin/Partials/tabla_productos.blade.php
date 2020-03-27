<div class=" table-responsive">

    <table class="table table-striped ">

        @if(isset($busqueda))
            <p class="pl-3">Resultados de: {{$busqueda}}</p>
        @endif

        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Modelo</th>
                <th>Caracteristicas</th>
                <th>Cantidad</th>
                <th>Precio RD$</th>
                <th>Categoria</th>
                <th>Proveedor</th>
                <th>Estado</th>
                <th>Foto</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        @foreach ($productos as $producto) 
            <tr>
                <td> {{$producto->id}}</td>
                <td> {{$producto->producto}}</td>
                <td> {{$producto->id_modelo}}</td>
                <td> {{$producto->caracteristicas}}</td>
                <td> {{$producto->cantidad}}</td>
                <td> {{$producto->precio}}</td>
                <td> {{$producto->id_categoria}}</td>
                <td> {{$producto->id_proveedor}}</td>
                <td> {{$producto->estado}}</td>
                <td> 
                    @for ( $i=0; $i < sizeof($producto->fotos); $i++) 
                        @if($i === 0)
                        <a class='venobox' onclick="v()" data-gall='gallery01' href='{{$producto->fotos[$i]->foto}}'> <img src='{{$producto->fotos[$i]->foto}}' height='30' width='30' alt='Foto'> </a>
                        @else
                        <a hidden class='venobox' onclick="v()" data-gall='gallery01' href='{{$producto->fotos[$i]->foto}}'> <img src='{{$producto->fotos[$i]->foto}}' height='30' width='30' alt='Foto'> </a>

                        @endif 
                    @endfor
                </td>
                
                <td>  
                    <a  href="" class='btn btn-theme btn-xs'>
                        <i class='fas fa-edit'></i>
                    </a> 
                    <a href="" class='btn btn-theme04 btn-xs'  >
                        <i class='far fa-trash-alt'></i>
                    </a>
                </td>
                <td> </td>
                
            </tr>
        @endforeach
        </tbody>
        </div>

    </table>
    <div class="card-footer">
    {{ $productos->links()  }}
    </div>

<div>

<h4>
 
   {{sizeof($productos[0]->fotos)}}
   <br>



</div>