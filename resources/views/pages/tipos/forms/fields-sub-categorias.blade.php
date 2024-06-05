<div class="col-12 col-md-8">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span> :</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="Ingrese nombre de la categoría" value="{{ old('nombre', $subCategoria->nombre ?? '') }}">
        @error('nombre')
        <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    <!--select for categorias value categoria->-->
    <div class="mb-3">
        <label for="categoria_id" class="form-label">Categoria <span class="text-danger">*</span> :</label>
        <select class="form-select @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id">
            <option value="null">Seleccione una categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id', $subCategoria->categoria_id ?? '') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        @error('categoria_id')
        <span class="error text-danger">{{ $message }}</span>
        @enderror

    </div>
</div>
<div class=" col-12 col-md-4 pt-2">
    <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Guardar' }}</button>
    <a href="{{route('sub.categorias.index')}}" class="btn btn-warning">Cancelar</a>
</div>