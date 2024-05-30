<div>
    <x-offcanvas title="Nueva SubCategoria" id="{{$idOff}}">
        <x-slot:button>
            Nuvea Sub Categoria
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
                            <label for="categoria_id"> Categoria: </label>
                            <select name="categoria_id" id="categoria_id" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($categorias as $id => $nombre)
                                <option value="{{$id}}"> {{$nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-2">

                            <button type="button" class="btn btn-primary" wire:click="saveSubCategoria">
                                add
                            </button>

                        </div>
                    </div>
                </form>
            </x-slot:content>
            <!--  <x-slot:boton>
        <button slot="boton" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#formCategoria" aria-controls="formCategoria">Nueva Categoria</button>
        </x-slot> -->

    </x-offcanvas>


</div>