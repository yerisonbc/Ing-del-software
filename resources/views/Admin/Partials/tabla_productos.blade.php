
            <table class="table table-striped display">

<thead>
    <tr>
        <th>Código</th>
        <th>Producto</th>
        <th>Modelo</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Estado</th>
        <th>Foto</th>
        <th></th>
    </tr>
</thead>

<tbody>
    <td>1</td>
    <td> @foreach ($productos as $producto) 
        {{$producto->producto}}
    @endforeach
     </td>
    <td>10</td>
    <td>10</td>
    <td>25000</td>
    <td>Celulare</td>
    <td>Nuevo</td>
    <td></td>
    <td></td>
</tbody>

</table>