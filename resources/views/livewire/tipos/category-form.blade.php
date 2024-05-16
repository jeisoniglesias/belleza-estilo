<div wire:ignore.self class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" wire:click="resetFields"></button>
    </div>
    <div class="offcanvas-body">
        <!--contenido-->
        <form>
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="nombre">Product nombre <span class="text-danger">*</span> :</label>
                    <input type="text" id="nombre" wire:model="nombre" class="form-control" name="nombre" />
                    @error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="descripcion"> Product descripcion: </label>
                    <input type="text" id="descripcion" wire:model="descripcion" class="form-control" name="descripcion" required />
                </div>
                <div class="col-12 mt-2">
                    <button type="button" class="btn btn-primary" wire:click="saveProduct">add</button>
                </div>
            </div>
        </form>
    </div>
</div>

@script
<script src="">
    $wire.on('closeOffcanvas', (e) => {
        console.log(e.detail);
        const {
            offcanvasId
        } = e[0];
        const offcanvas = document.getElementById(offcanvasId);
        const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvas);
        offcanvasInstance.hide();


    });

    $wire.on('updating', () => {
        const offcanvasBackdrop = document.querySelector('.offcanvas-backdrop');
        if (offcanvasBackdrop) {
            offcanvasBackdrop.classList.add('show');
        }
    });
</script>
@endscript