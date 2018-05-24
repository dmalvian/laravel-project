<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <script defer src="{{ asset('js/all.js') }}"></script>
    @yield('assets')
  </head>
  <body>
  @yield('content')
  </body>
</html>