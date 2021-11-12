
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog Site') }}</title>
    
    <!-- Vendor styles-->
    <!-- Animate.CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.css') }}">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Ionicons-->
    <link rel="stylesheet" href="{{ asset('vendor/ionicons/css/ionicons.css') }}">
    <!-- Material Colors-->
    <link rel="stylesheet" href="{{ asset('vendor/material-colors/dist/colors.css') }}">
    <!-- Application styles-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body class="theme-default">
    <div class="min-h-screen bg-gray-100">
        <div class="layout-container">
            <!-- top navbar-->
            @include('layouts.navigation')
            
            <!-- Main section-->
            <main class="main-container">
                @yield('content')
            </main>
        </div>
    </div>
    @include('layouts.scripts')
  </body>
</html>