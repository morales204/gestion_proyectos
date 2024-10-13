@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Proyecto</span>
                    </div>
                    <div class="card-body bg-white">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="POST" action="{{ route('proyectos.update', $proyecto->id_proyecto) }}"  role="form" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
