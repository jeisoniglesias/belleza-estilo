@extends('layouts.base')
@push('styles')@endpush
@section('content_base')

<div class="container-fluid">
    <div class="row">
        <!-- sidebar -->
        <x-dashboard.sidebar />

        <!-- overlay to close sidebar on small screens -->
        <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
        <!-- note: in the layout margin auto is the key as sidebar is fixed -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-2 ">

            <!-- top nav -->
            <x-dashboard.navbar />
            <!-- top nav -->

            <!-- main content -->
            <main class="container-fluid">
                @yield('content')
            </main>
        </div>
    </div>
</div>
@endsection
@push('scripts')@endpush