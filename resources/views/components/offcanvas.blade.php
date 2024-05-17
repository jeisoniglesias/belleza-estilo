<div>
    <button slot="boton" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#{{$id}}" aria-controls="{{$id}}">{{$button}}</button>

    <div wire:ignore.self data-bs-backdrop="static" class="offcanvas offcanvas-end" tabindex="-1" id="{{$id}}" aria-labelledby="{{$ariaLabelledby}}">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">
                {{$title}}
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" wire:click="resetFields"></button>
        </div>

        <div class="offcanvas-body">
            {{$content}}
        </div>
    </div>

    <script>
        window.addEventListener('errorOffcanvas', (e) => {
            const {
                offcanvasId
            } = e.detail[0];

            let offcanvasBody = document.getElementById(offcanvasId);
            if (!offcanvasBody) {
                offcanvasBody = document.querySelector('.offcanvas')
            }
            let newElement = '<div class="offcanvas-backdrop fade show"></div>';

            setTimeout(() => {
                offcanvasBody.insertAdjacentHTML('afterend', newElement);
            }, 0.1);
        });

        window.addEventListener('closeOffcanvas', (e) => {
            const {
                offcanvasId
            } = e.detail[0];
            let offcanvasBody = document.getElementById(offcanvasId);
            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvas);
            offcanvasInstance.hide();

        });
    </script>

</div>