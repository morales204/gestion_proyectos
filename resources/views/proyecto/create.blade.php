@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card card-default bg-dark">
                    <div class="card-header text-center">
                        <span class="card-title text-white">{{ __('Crear') }} Proyecto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('proyectos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
