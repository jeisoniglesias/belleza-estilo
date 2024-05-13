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

<x-card-default title="card desde home" :class="'bg-danger'">
    <table class="table text-nowrap mb-0 align-middle">
        <thead class="text-dark fs-4">
            <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Assigned</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Priority</h6>
                </th>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Budget</h6>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">1</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                    <span class="fw-normal">Web Designer</span>
                </td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Elite Admin</p>
                </td>
                <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                    </div>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                </td>
            </tr>
            <tr>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">2</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                    <span class="fw-normal">Project Manager</span>
                </td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                </td>
                <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                    </div>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                </td>
            </tr>
            <tr>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">3</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                    <span class="fw-normal">Project Manager</span>
                </td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                </td>
                <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                    </div>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                </td>
            </tr>
            <tr>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">4</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                    <span class="fw-normal">Frontend Engineer</span>
                </td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">Hosting Press HTML</p>
                </td>
                <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                    </div>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                </td>
            </tr>
        </tbody>
    </table>
</x-card-default>


@endsection