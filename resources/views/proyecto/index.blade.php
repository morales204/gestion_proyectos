@extends('layouts.app')

@section('template_title')
    Proyectos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <strong>{{ __('Proyectos') }}</strong>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-dark btn-sm float-right shadow"  data-placement="left">
                                {{ __('Agregar Nuevo') }}
                                </a>
                            </div>
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
                                        <!-- <th>No</th> -->
                                        
									<th >ID Proyecto</th> 
									<th >Nombre Proyecto</th>
									<th >Inicio Proyecto</th>
									<th >Fin Proyecto</th>
									<th >Descripcion Proyecto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            
										<td >{{ $proyecto->id_proyecto }}</td> 
										<td >{{ $proyecto->nombre_proyecto }}</td>
										<td >{{ $proyecto->inicio_proyecto }}</td>
										<td >{{ $proyecto->fin_proyecto }}</td>
										<td >{{ $proyecto->descripcion_proyecto }}</td>

                                            <td>
                                                <form action="{{ route('proyectos.destroy', $proyecto->id_proyecto) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show', $proyecto->id_proyecto) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('proyectos.update', $proyecto->id_proyecto) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit', $proyecto->id_proyecto) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Estás seguro de borrarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
