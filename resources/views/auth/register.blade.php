@extends('layouts.auth')

@section('content_auth')
    <div class="mt-5">
        <p class="mb-1 h-1">Registrarse.</p>
        <p class="text-muted mb-2">Hola.</p>
        <div class="d-flex flex-column ">


            <div class="mt-3">
                <p class="mb-0 text-muted">Tienes cuenta?</p>
                <a class="btn btn-primary" href="{{ route('login') }}">Inicia sesion
                    <span class="fas fa-chevron-right ms-1">
                    </span>
                </a>
            </div>
        </div>
    </div>
@endsection
