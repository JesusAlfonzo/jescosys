<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $producto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $producto?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $producto?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stock" class="form-label">{{ __('Stock') }}</label>
            <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $producto?->stock) }}" id="stock" placeholder="Stock">
            {!! $errors->first('stock', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <!-- Selector para Categoría -->
        <div class="form-group mb-2 mb20">
            <label for="categoria_id" class="form-label">{{ __('Categoría') }}</label>
            <select name="categoria_id" id="categoria_id" class="form-control @error('categoria_id') is-invalid @enderror">
                <option value="">-- Seleccione una categoría --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" 
                        {{ old('categoria_id', $producto?->categoria_id) == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <!-- Selector para Marca -->
        <div class="form-group mb-2 mb20">
            <label for="marca_id" class="form-label">{{ __('Marca') }}</label>
            <select name="marca_id" id="marca_id" class="form-control @error('marca_id') is-invalid @enderror">
                <option value="">-- Seleccione una marca --</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" 
                        {{ old('marca_id', $producto?->marca_id) == $marca->id ? 'selected' : '' }}>
                        {{ $marca->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('marca_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <!-- Selector para Presentación -->
        <div class="form-group mb-2 mb20">
            <label for="presentacion_id" class="form-label">{{ __('Presentación') }}</label>
            <select name="presentacion_id" id="presentacion_id" class="form-control @error('presentacion_id') is-invalid @enderror">
                <option value="">-- Seleccione una presentación --</option>
                @foreach($presentaciones as $presentacion)
                    <option value="{{ $presentacion->id }}" 
                        {{ old('presentacion_id', $producto?->presentacion_id) == $presentacion->id ? 'selected' : '' }}>
                        {{ $presentacion->nombre }} ({{ $presentacion->cantidad }} {{ $presentacion->unidad_medida }})
                    </option>
                @endforeach
            </select>
            {!! $errors->first('presentacion_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>