@extends('layouts.auth')

@section('content_auth')
<div class="mt-5">
    <p class="mb-1 h-1">Registrate</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row mb-3 justify-content-center align-items-center">
            {{--<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

            <div class="col-md-9">
                <input placeholder="Nombre" type="text" tabindex="1" required autofocus id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center">
            <div class="col-md-9">
                <input placeholder="Correo electrónico" type="text" tabindex="1" required autofocus id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3 justify-content-center align-items-center ">
            <div class="col-md-9">
                <input placeholder="Contraseña" type="password" tabindex="1" required autofocus id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-2 justify-content-center align-items-center">

            <div class="col-md-9">
                <input placeholder="Contraseña" type="password" tabindex="1" required autofocus id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4 ">
                <button type="submit" class="btn bg-pink-100">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
    <div class="mt-3">
        <p class="mb-0 text-muted">Tienes cuenta?</p>
        <a class="btn btn-primary" href="{{ route('login') }}">Inicia sesion
            <span class="fas fa-chevron-right ms-1">
            </span>
        </a>
    </div>
</div>
@endsection