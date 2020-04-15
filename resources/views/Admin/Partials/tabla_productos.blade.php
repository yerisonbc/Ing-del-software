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
                <td> {{$producto->modelo->modelo}}</td>
                <td> {{$producto->caracteristica}}</td>
                <td> {{$producto->cantidad}}</td>
                <td> {{$producto->precio}}</td>
                <td> {{$producto->categoria->categoria}}</td>
                <td> {{$producto->id_proveedor}}</td>
                <td> {{$producto->estado}}</td>
                <td> 
                    @foreach($producto->fotos as $i=>$foto)
                        @if($i == 0)
                        <a class='venobox'data-gall='gallery01' href='{{$foto->foto}}'> <img src='{{$foto->foto}}' height='30px' width='30px' alt='Foto'> </a>
                        @else
                        <a class='venobox'data-gall='gallery01' href='{{$foto->foto}}' hidden> <img src='{{$foto->foto}}' height='30px' width='30px' alt='Foto'> </a>
                        @endif

                       
                    @endforeach
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



</div>