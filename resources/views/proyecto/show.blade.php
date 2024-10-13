@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? __('Show') . " " . __('Proyecto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Proyecto:</strong>
                                    {{ $proyecto->id_proyecto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Proyecto:</strong>
                                    {{ $proyecto->nombre_proyecto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Inicio Proyecto:</strong>
                                    {{ $proyecto->inicio_proyecto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fin Proyecto:</strong>
                                    {{ $proyecto->fin_proyecto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Proyecto:</strong>
                                    {{ $proyecto->descripcion_proyecto }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
