<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <a class="navbar-brand" href="#">Blog App</a>
        <ul class="nav navbar-nav">
          <li>
            <a href="/posts">Posts</a>
          </li>
        </ul>
      </div>

      @yield('content')
    </div>
  </body>
</html>
