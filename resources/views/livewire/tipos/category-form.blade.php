<x-offcanvas title="Nueva Categoria" id="{{$idOff}}">
    <x-slot:button>
        Nuvea categoria
        <i class="bi bi-patch-plus-fill"></i>
        </x-slot>

        <x-slot:content>
            <form>
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="nombre">Product nombre <span class="text-danger">*</span> :</label>
                        <input type="text" id="nombre" wire:model="nombre" class="form-control" name="nombre" />
                        @error('nombre')
                        <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="descripcion"> Product descripcion: </label>
                        <input type="text" id="descripcion" wire:model="descripcion" class="form-control" name="descripcion" required />
                    </div>
                    <div class="col-12 mt-2">
                        <button type="button" class="btn btn-primary" wire:click="saveCategoria">
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