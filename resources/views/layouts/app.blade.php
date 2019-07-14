<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
      <div class="container">
        {{-- Navigation Section --}}
        @include('layouts.partials.nav')

        {{-- Content Section --}}
        @yield('content')

        {{-- Footer Section --}}
        @include('layouts.partials.footer')

        <!-- Scripts -->
        <script src="/js/app.js"></script>
      </div>
    </body>
</html>
