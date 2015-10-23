<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel 5 Blog')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      @include('_navigation')
      @yield('content')
    </div>

    <script src="{{ asset('js/all.js')}}"></script>
  </body>
</html>
