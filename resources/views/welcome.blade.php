@extends('layouts.app')

@section('template_title')
    Proyectos
@endsection

@section('content')
<div class="container" style="background-color: #f8f9fa;">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <h2 style="font-weight: bold;">Find Art</h2>
            <p >Mariana Morales Rodríguez</p>
            <a href="https://www.youtube.com/watch?v=4wZS3_f6stE&list=PLACjucZ3g98XjqnTMulUjfZ1tYBjoUpc9" class="btn btn-dark" style="border-radius: 25px; color: white; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                Curso
            </a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('build/images/bordado.avif') }}" class="img-fluid" alt="Descripción de la imagen">

        </div>
    </div>
</div>
@endsection