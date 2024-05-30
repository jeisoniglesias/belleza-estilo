<div>
    <x-offcanvas title="Actualizar SubCategoria" id="{{$idOff}}">
        <x-slot:button>
            Actualizar Sub Categoria
            <i class="bi bi-patch-plus-fill"></i>
            </x-slot>

            <x-slot:content>
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-12 pb-2">
                            <label for="nombre">Nombre <span class="text-danger">*</span> :</label>
                            <input type="text" id="nombre" wire:model="nombre" class="form-control" name="nombre" />
                            @error('nombre')
                            <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="categoria_id"> Categoría: </label>
                            <select name="categoria_id" id="categoria_id" wire:model="categoria_id" class="form-select" aria-label="Default select example">
                                <option value="">Seleccione una categoría</option>
                                @foreach ($categorias as $id => $nombre)
                                <option value="{{ $id }}" {{ ($id === $categoria_id) ? 'selected' : '' }}>{{ $nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-2">

                            <button type="button" class="btn btn-primary" wire:click="update">
                                add
                            </button>

                        </div>
                    </div>
                </form>
            </x-slot:content>
    </x-offcanvas>

</div>