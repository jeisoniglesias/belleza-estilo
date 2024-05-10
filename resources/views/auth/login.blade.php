@extends('layouts.auth')

@section('content_auth')
    <div class="mt-5">
        <p class="mb-1 h-1">Iniciar sesion</p>
        <p class="text-muted mb-2">Hola inicia.</p>
        <div class="d-flex flex-column ">
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-1 w-100 bg-danger py-2">
                        <input type="text" class="rounded form-control w-75 mx-auto">
                    </div>
                    <div class="row mb-1">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

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
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-black">
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

            <div class="mt-3">
                <p class="mb-0 text-muted">Aun no tienes cuenta?</p>
                <a class="btn btn-primary" href="{{ route('register') }}">Registrate
                    <span class="fas fa-chevron-right ms-1">
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
