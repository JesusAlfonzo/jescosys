@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Mis Modulos</h1>
        <ul class="fs-1">
            <li><a href="{{ route('productos.index') }}">Productos</a></li>
                <ul class="fs-2">
                    <li><a href="{{ route('marcas.index') }}">Marcas</a></li>
                    <li><a href="{{ route('categorias.index') }}">Categorias</a></li>
                    <li><a href="{{ route('presentaciones.index') }}">Presentacion</a></li>
                </ul>
        </ul>
    </div>
</div>
@endsection
