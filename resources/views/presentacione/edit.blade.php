@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Presentacione
@endsection

@section('content')

<div class="d-flex justify-content-center">
    <x-divider currentPage='Editar una presentacion' >
        <a href="{{ route('presentaciones.index') }}">Presentaciones</a>
    </x-divider>
</div>
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-12 d-flex justify-content-center">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Presentacione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('presentaciones.update', $presentacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('presentacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
