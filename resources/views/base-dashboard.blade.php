<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <script defer src="{{ asset('js/all.js') }}"></script>
    <style>
        .cust-font {
            font-family: "Bodoni MT Black", sans-serif;
        }
    </style>
    @yield('assets')
  </head>
  <body>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand"><a class="navbar-item" href="{{ url('dashboard') }}"><h2 class="title cust-font">RSing</h2></a>
                <div class="navbar-burger burger" data-target="navMenu"><span></span><span></span><span></span></div>
            </div>
            <div class="navbar-menu" id="navMenu">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable"><a class="navbar-link">Account</a>
                        <div class="navbar-dropdown">
                            <a href="{{ url('logout') }}" class="navbar-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="subtitle">
            <strong>Sehat nggak pakai ngantri!</strong>
            </p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                @yield('content')
            </div>
        </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>&copy; 2018 - Rumah Sakit Dalam Jaringan (Online)</p>
        </div>
      </div>
    </footer>
  </body>
</html>