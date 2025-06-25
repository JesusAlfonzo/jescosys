@extends('layouts.app')

@section('template_title')
    {{ $presentacione->name ?? __('Show') . " " . __('Presentacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Presentacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('presentaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $presentacione->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Unidad Medida:</strong>
                                    {{ $presentacione->unidad_medida }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $presentacione->cantidad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
