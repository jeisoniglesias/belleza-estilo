<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/sass/auth.scss', 'resources/js/app.js'])

    <!--
    TODO: Add custom styles layout card for login, register, confirm password, reset password and verify email
-->
</head>

<body>
    <div class="" id="app">
        <div class="container">
            <div class="m-0 vh-100 row justify-content-center align-items-center">
                <div class="col-auto p-2 text-center">
                    <div class="container_auth">
                        <div class="body d-md-flex align-items-center justify-content-between">
                            <div class="box-1 mt-md-0 mt-5">
                                <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                    class="" alt="">
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
</body>

</html>
