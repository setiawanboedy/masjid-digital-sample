<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{url("img/favicon.png")}}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <title> {{ $title }} - Masjid Digital</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        @include('admin.includes.styles')
        @stack('styles')
        <style>
            .sans{
                font-family: "Open Sans", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
                font-variation-settings:
                    "wdth" 100;
            }
        </style>
        <!-- Styles -->
        @livewireStyles
        @toastifyCss
    </head>
    <body class="sans antialiased">

        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    @include('admin.includes.navigation')
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>{{ $page_heading }}</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>
            @include('admin.includes.footer')
        </div>

        @include('admin.includes.modal.logout')
        @stack('modals')
        @include('admin.includes.scripts')
        @toastifyJs
        @livewireScripts
        @stack('scripts')
    </body>
</html>
