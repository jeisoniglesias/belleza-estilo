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
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-pink-100">
    <div>
        @include('components.navigation')
        <!-- Page Heading -->
        @if (isset($header))
        <header class=" py-5 bg-pink-400">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    {{ $header }}
                </div>
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="py-5">


            {{ $slot }}
        </main>
    </div>
    @include('ui.footer')
</body>

</html>