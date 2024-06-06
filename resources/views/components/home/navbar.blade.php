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
            @foreach ($cart as $item)
            <div class="product">
                <h4>{{ $item['name'] }}</h4>
                <p>Quantity: {{ $item['quantity'] ?? 'N/A' }}</p>
                @isset($item['subcategoria'])
                <p>Subcategory: {{ $item['subcategoria'] }}</p>
                @endisset
                <p>Price: ${{ $item['price'] }}</p>
                <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" class="img-thumbnail w-50 h-50">
            </div>
            @endforeach
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