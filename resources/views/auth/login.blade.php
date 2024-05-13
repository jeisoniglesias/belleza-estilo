@extends('layouts.auth')

@section('content_auth')
<div class="mt-5">
    <p class="mb-1 h-1">Iniciar sesion</p>
    <div class="d-flex flex-column ">
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-2 justify-content-center align-items-center ">
                    <div class="col-md-9">
                        <input placeholder=" Correo electrónico" type="text" tabindex="1" required autofocus id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2 justify-content-center align-items-center">
                    <div class="col-md-9">
                        <input placeholder=" Contraseña" type="password" tabindex="1" required autofocus id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">

                    <button type="submit" class="btn btn-primary_from btn-small">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
        </div>
        </form>
    </div>

    <div class="py-3">
        <p class="mb-0 text-muted">Aun no tienes cuenta?</p>
        <a class="btn btn-link" href="{{ route('register') }}">Registrate
            <span class="fas fa-chevron-right ms-1"></span>
        </a>
    </div>

</div>
@endsection