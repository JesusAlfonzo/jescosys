@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <x-divider currentPage="Mis Modulos">
    <a href="{{ route('home') }}">Dashboard</a>
    </x-divider>

    <x-md></x-md>

        <ul class="fs-2">
            <h1 class="fs-1">Mis modulos:</h1>
            <li class="">
                <a href="{{ route('productos.index') }}">Productos</a>
            </li>
                <ul class="fs-3">
                    <li><a href="{{ route('marcas.index') }}">Marcas</a></li>
                    <li><a href="{{ route('categorias.index') }}">Categorias</a></li>
                    <li><a href="{{ route('presentaciones.index') }}">Presentacion</a></li>
                </ul>
        </ul>
    </div>
</div>
@endsection
