<div class="col-12 col-md-8">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span> :</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="Ingrese nombre de la categoría" value="{{ old('nombre', $categoria->nombre ?? '') }}">
        @error('nombre')
        <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción:</label>
        <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Ingrese descripción de la categoría" value="{{ old('descripcion', $categoria->descripcion ?? '') }}">
        @error('descripcion')
        <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-12 col-md-4 pt-2">
    <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Guardar' }}</button>
    <a href="{{route('categorias.index')}}" class="btn btn-warning">Cancelar</a>
</div>