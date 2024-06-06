<div class="row">
    <div class="col-12 col-md-8">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span> :</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="Ingrese nombre de la categoría" value="{{ old('nombre', $producto->nombre ?? '') }}">
            @error('nombre')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea type="text" rows="2" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" placeholder="Ingrese descripción de la categoría" value="{{ old('descripcion', $producto->descripcion ?? '') }}"></textarea>
            @error('descripcion')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 row">
            <div class="col-6">
                <label for="precio" class="form-label">Precio <span class="text-danger">*</span> :</label>
                <input type="number" class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio" placeholder="Ingrese precio" value="{{ old('precio', $producto->precio ?? '') }}">
                @error('precio')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-6">
                <label for="stock" class="form-label">Stock <span class="text-danger">*</span> :</label>
                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" placeholder="Ingrese stock" value="{{ old('stock', $producto->stock ?? '') }}">
                @error('stock')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-6">

                <label for="sub_categoria_id" class="form-label">Categoria <span class="text-danger">*</span> :</label>
                <select class="form-select
                        @error('sub_categoria_id') is-invalid @enderror" id="sub_categoria_id" name="sub_categoria_id">

                    <option value="null">
                        Seleccione una categoria
                    </option>

                    @foreach($subcategorias as $id=>$nombre)
                    <option value="{{ $id }}" {{ old('sub_categoria_id', $producto->sub_categoria_id ?? '') == $id ? 'selected' : '' }}>{{$nombre}}</option>
                    @endforeach
                </select>
                @error('sub_categoria_id')
                <span class="error text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col-6">
                <label for="public_target_id" class="form-label">Publico a ofertar <span class="text-danger">*</span> :</label>
                <select class="form-select
                        @error('public_target_id') is-invalid @enderror" id="public_target_id" name="public_target_id">

                    <option value="null">
                        Seleccione una categoria
                    </option>

                    @foreach($target as $id=>$nombre)
                    <option value="{{ $id }}" {{ old('public_target_id', $producto->public_target_id ?? '') == $id ? 'selected' : '' }}>{{$nombre}}</option>
                    @endforeach
                </select>
                @error('public_target_id')
                <span class="error text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

    </div>
    <div class="col-12 col-md-4 pt-2 h-auto">
        <div class="position-relative p-4 text-center text-muted bg-body border rounded-5 h-100 center-div">
            <div id="imagePreview" {!! old('thumbnail') ? '' : 'hidden' !!}></div>
            <div class="container-file">
                <label for="thumbnail" class="btn btn-info">Selecciona imagen</label>
                <input type="file" id="thumbnail" style="display:none" accept="image/*" onchange="previewImage(event)" name="thumbnail">
                @error('thumbnail')
                <div class="container m-0">
                    <span class="error text-danger">{{ $message }}</span>
                </div>
                @enderror
            </div>


        </div>
    </div>
    <div class="col-12 col-md-4 pt-2">
        <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Guardar' }}</button>
        <a href="{{route('productos.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

<script>
    function previewImage(event) {
        let reader = new FileReader();
        let imageField = document.getElementById("imagePreview");
        const file = event.target.files[0];

        const container = document.querySelector(".container-file");

        imageField.innerHTML = '';

        if (file) {
            reader.readAsDataURL(file);
            reader.onload = function() {
                const img = document.createElement('img');
                img.src = reader.result;
                img.className = 'img-fluid pb-2';
                imagePreview.appendChild(img);
                imageField.hidden = false;
            }
        }

    }
</script>