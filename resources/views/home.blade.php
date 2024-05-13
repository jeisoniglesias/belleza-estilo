@extends('layouts.dashboard')

@section('content')
<section class="row">
    <div class="col-md-6 col-lg-4">
        <!-- card -->
        <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
                <span class="bi bi-box h5"></span>
                <h5 class="ms-2">Products</h5>
            </a>
        </article>
    </div>
    <div class="col-md-6 col-lg-4">
        <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
                <span class="bi bi-person h5"></span>
                <h5 class="ms-2">Customers</h5>
            </a>
        </article>
    </div>
    <div class="col-md-6 col-lg-4">
        <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
                <span class="bi bi-person-check h5"></span>
                <h5 class="ms-2">Sellers</h5>
            </a>
        </article>
    </div>
</section>

<div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
    <div class="container">
        <h1 class="display-4 mb-2 text-primary">Simple</h1>
        <p class="lead text-muted">Simple Admin Dashboard with Bootstrap.</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection