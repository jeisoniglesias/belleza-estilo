@extends('layouts.base')
@push('styles')
@vite(['resources/css/auth.css'])

@endpush
@section('content_base')
<div class="" id="app">
    <div class="container">
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-auto text-center">
                <div class="container_auth">
                    <div class="body d-md-flex align-items-center justify-content-between">
                        <div class="box-1 mt-md-0 mt-5">
                            <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="" alt="">
                        </div>
                        <div class=" box-2 d-flex flex-column h-100">
                            @yield('content_auth')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@push('scripts')
@endpush