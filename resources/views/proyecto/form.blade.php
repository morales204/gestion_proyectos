<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!-- <div class="form-group mb-2">
            <label for="id_proyecto" class="form-label">{{ __('Id Proyecto') }}</label>
            <input type="text" name="id_proyecto" class="form-control @error('id_proyecto') is-invalid @enderror" value="{{ old('id_proyecto', $proyecto?->id_proyecto) }}" id="id_proyecto" placeholder="Id Proyecto">
            {!! $errors->first('id_proyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>  -->
        <div class="form-group mb-2">
            <label for="nombre_proyecto" class="form-label">{{ __('Nombre Proyecto') }}</label>
            <input type="text" name="nombre_proyecto" class="form-control @error('nombre_proyecto') is-invalid @enderror" value="{{ old('nombre_proyecto', $proyecto?->nombre_proyecto) }}" id="nombre_proyecto" placeholder="Nombre Proyecto">
            {!! $errors->first('nombre_proyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2">
            <label for="descripcion_proyecto" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="descripcion_proyecto" class="form-control @error('descripcion_proyecto') is-invalid @enderror" value="{{ old('descripcion_proyecto', $proyecto?->descripcion_proyecto) }}" id="descripcion_proyecto" placeholder="Describe tu proyecto">
            {!! $errors->first('descripcion_proyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="row mb-3"> <!-- Añadido contenedor row -->
    <div class="col-md-6"> <!-- Primera columna -->
        <div class="form-group mb-2">
            <label for="inicio_proyecto" class="form-label">{{ __('Inicio Proyecto') }}</label>
            <input type="date" name="inicio_proyecto" class="form-control @error('inicio_proyecto') is-invalid @enderror" value="{{ old('inicio_proyecto', $proyecto?->inicio_proyecto) }}" id="inicio_proyecto" placeholder="Inicio Proyecto">
            {!! $errors->first('inicio_proyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <div class="col-md-6"> <!-- Segunda columna -->
        <div class="form-group mb-2">
            <label for="fin_proyecto" class="form-label">{{ __('Fin Proyecto') }}</label>
            <input type="date" name="fin_proyecto" class="form-control @error('fin_proyecto') is-invalid @enderror" value="{{ old('fin_proyecto', $proyecto?->fin_proyecto) }}" id="fin_proyecto" placeholder="Fin Proyecto">
            {!! $errors->first('fin_proyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>

    </div>
    <div class="col-md-12 mt20 mt-2 text-end">
        <button type="submit" class="btn btn-dark">{{ __('Guardar') }}</button>
    </div>
</div>