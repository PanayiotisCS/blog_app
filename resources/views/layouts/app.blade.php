
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog Site') }}</title>
    
    @include('layouts.css')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
  </head>
  <body class="theme-default">
    <div class="min-h-screen bg-gray-100">
        <div class="layout-container-fluid">
            <!-- top navbar-->
            @include('layouts.navigation')

            @if(Auth::user()->type == 1)
                @include('layouts.sidebar')
              <!-- Main section-->
              <main class="main-container">
                  @yield('content')
              </main>
            @else
              <main>
                @yield('content')
              </main>
            @endif
        </div>
    </div>
  </body>
  @include('layouts.scripts')
</html>