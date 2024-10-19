@extends('layouts.app')

@section('template_title')
    Proyectos Pendientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                <strong>{{ __('Proyectos Pendientes') }}</strong>
                            </span>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID Proyecto</th> 
                                        <th>Nombre Proyecto</th>
                                        <th>Inicio Proyecto</th>
                                        <th>Fin Proyecto</th>
                                        <th>Descripcion Proyecto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ $proyecto->id_proyecto }}</td> 
                                            <td>{{ $proyecto->nombre_proyecto }}</td>
                                            <td>{{ $proyecto->inicio_proyecto }}</td>
                                            <td>{{ $proyecto->fin_proyecto }}</td>
                                            <td>{{ $proyecto->descripcion_proyecto }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!} <!-- Si necesitas paginación, aunque no sería común en esta vista -->
            </div>
        </div>
    </div>
@endsection
