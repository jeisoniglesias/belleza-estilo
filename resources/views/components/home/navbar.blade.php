<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    @guest
    <li class="nav-item">
        @if (Route::has('login'))
        <a class="nav-link my-2" href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
    </li>
    <li class="nav-item">

        @if (Route::has('register'))
        <a class="nav-link my-2" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    </li>
    @else
    <li class="nav-item dropdown nav-user">
        <a class="nav-link my-2 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            <span class="bi bi-chevron-down small p-1"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="{{ route('home') }}"> {{ __('Dashboard') }}
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('profile') }}"> {{ __('Profile') }}
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>


        </ul>
    </li>
    @endguest
    <li class="nav-item">

        <button class="nav-link fs-2" id="liveToastBtn">
            <i class="bi bi-cart-check-fill"></i>
        </button>
    </li>

</ul>
<div class="toast-container position-start bottom-0 end-0  p-3 " style="top:60%!important">

    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
        <div class="toast-header">
            <strong class="me-auto">Carrito de compras</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            @php
            $cart = session()->get('cart');
            @endphp
            @if($cart)
            <div class="list-group list-group-flush">
                @foreach ($cart as $item)
                <div class="list-group-item list-group-item-action  ">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" class="img-thumbnail ">
                        </div>
                        <div class="col-sm-9">
                            <div class="row">

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $item['name'] }}</h5>
                                    <small> {{ $item['quantity'] ?? 'N/A' }}</small>
                                </div>
                                @isset($item['subcategoria'])
                                <p class="mb-1">{{ $item['subcategoria'] }}</p>
                                @endisset

                                <small>And some small print.</small>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>


            @else
            <p>No hay productos en el carrito</p>
            @endif
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
            const toastBootstrap =
                bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
    });
</script>