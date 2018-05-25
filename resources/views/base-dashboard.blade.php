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
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand"><a class="navbar-item" href="{{ url('dashboard') }}"><h2 class="title">RSing</h2></a>
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
            Everything you need to <strong>create a website</strong> with Bulma
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
          <p>
            <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>