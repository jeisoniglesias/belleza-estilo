@extends('layouts.base')
@push('styles')
@endpush
@section('content_base')
<style>
    .filter-v1 {
        background-color: rgba(255, 255, 255, 0.6);
        backdrop-filter: saturate(.8);
        -webkit-backdrop-filter: saturate(.8);
    }

    .filter-v2 {
        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: sature(1.8);
        -webkit-backdrop-filter: sature(1.8);
    }
</style>
<nav class="navbar  navbar-expand-lg pb-0">
    <div class="container mb-0">

        <x-logo-home />

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end filter-v2" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Belleza & Estilo Contigo
                    <i class="bi bi-emoji-wink"></i>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <x-home.navbar />
            </div>
        </div>

    </div>
</nav>
<div class="container mt-0 pt-0">
    @yield('content')
</div>

@endsection
@push('scripts')
@endpush