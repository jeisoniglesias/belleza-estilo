<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    @guest
    <li class="nav-item">
        @if (Route::has('login'))
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
    </li>
    <li class="nav-item">

        @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    </li>
    @else
    <li class="nav-item dropdown nav-user">
        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

        <a class="nav-link fs-2" href="#">
            <i class="bi bi-cart-check-fill"></i>
        </a>
    </li>
</ul>