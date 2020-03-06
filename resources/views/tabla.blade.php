
@extends('layouts.cabeza')


@section('content')
    <div class="panel panel-default">

        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categoría</li>
                </ol>
            </nav>
        </div>
              

        <div class="panel-heading">
            <h2 class="titulo text-center">Lista</h2>
        </div>

        <div class="panel-body">

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
                    <td>{{ $producto[0]->producto }}</td>
                    <td>10</td>
                    <td>10</td>
                    <td>25000</td>
                    <td>Celulare</td>
                    <td>Nuevo</td>
                    <td></td>
                    <td></td>
                </tbody>

            </table>


        </div>


    </div>

    @endsection

