<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Blog Site') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" >
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('vendor/ionicons/css/ionicons.css') }}"> 
        <!-- Materials Colors-->
        <link rel="stylesheet" href="{{ asset('vendor/material-colors/dist/colors.css') }}">
        <!-- ApplicationStyles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{-- {{ $header }} --}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}
                @yield('content')
            </main>
        </div>
    </body>
    @yield('script')
</html>
