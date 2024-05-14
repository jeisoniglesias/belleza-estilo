@extends('layouts.base')
@push('styles')
@endpush
@section('content_base')
<div class="container bg-white">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid p-0"> 
            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="rounded-circle" alt="" style="width: 100px; height: auto;">
            
            <a class="navbar-brand text-uppercase fw-800" href="#">
            <span class="border-red pe-2">New</span>Product</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="myNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Todo</a>
                    <a class="nav-link" href="#">Mujer</a>
                    <a class="nav-link" href="#">Hombre</a>
                    <a class="nav-link" href="#">Niños</a>
                    <a class="nav-link" href="#">Niñas</a>
                    <a class="nav-link" href="#">Accesorios</a>
                    <a class="nav-link" href="#">Cosmetics</a>
                    @guest
                    @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else

                    <div class="dropdown nav-link ">
                        <button class="btn  border-0 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="bi bi-chevron-down ml-1 mb-2 small"></span>

                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endguest


                </div>

            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')



    </div>
</div>

@endsection
@push('scripts')
@endpush