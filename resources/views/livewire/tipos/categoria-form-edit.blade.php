<x-offcanvas title="Nueva Categoria" id="{{$idOff}}">
    <x-slot:button>
        <i class="bi bi-pencil-square me-0 p-2"></i>
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
                            Actalizar
                        </button>
                    </div>
                </div>
            </form>
        </x-slot:content>


</x-offcanvas>