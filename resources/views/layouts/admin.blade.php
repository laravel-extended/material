<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <!-- CSRF Token -->
  <meta name='csrf-token' content='{{ csrf_token() }}'>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <!-- <link rel='dns-prefetch' href='//fonts.gstatic.com'> -->
  <!-- Styles -->
  <link href="{{ asset('css/material.css') }}" rel='stylesheet'>
</head>
<body>
  <div id='root' style='display: none'>
    @include('material::components.navbar')
    <main class='main-content'>
      @include('material::components.sidebar')
      <div class='content mdc-top-app-bar--dense-fixed-adjust'>
        @yield('content')
      </div>
    </main>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/manifest.js') }}" defer></script>
  <script src="{{ asset('js/vendor.js') }}" defer></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
