
@extends('admin.layouts.app')


@section('content')
    <div class="panel panel-default">

        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                </ol>
            </nav>
        </div>
              

        <div class="panel-heading">
            <h2 class="titulo text-center">Lista</h2>
        </div>


        <div class="panel-body">
        <div class="users">
                @include('Admin.Partials.tabla_productos')

            </div>

        </div>


    </div>

    @endsection

