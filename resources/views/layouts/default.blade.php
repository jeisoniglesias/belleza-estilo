<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title-->
    <title>@yield('title', config('app.name', 'Laravel')) </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/scss/auth.scss', 'resources/js/app.js'])
</head>

<body class="bg-pink-100">
    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-auto">
            <div class="bodyAuth d-md-flex align-items-center justify-content-center">
                <div class="box-1 mt-md-0 mt-5">
                    {{ $element_left }}
                </div>
                <div class=" box-1 mt-md-0 mt-5">
                    {{ $element_right }}
                </div>
            </div>
        </div>
    </div>

</body>

</html>
