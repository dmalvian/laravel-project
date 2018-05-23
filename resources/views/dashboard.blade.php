@extends('base')    

@section('title','Dashboard')

@section('assets')
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
            <div class="column is-5 is-offset-1">
                <figure class="image is-4by3">
                    <img src="{{ asset('img/hospital.png') }}" alt="">
                </figure>
            </div>
            <div class="column is-5">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-parent">
                        <div class="tile is-child">
                            <p class="is-size-3 has-text-weight-semibold">Pendaftaran Pasien Baru</p>
                            <a href="{{ url('pasien/create') }}" class="button is-info is-outlined">
                                <span>Daftar Pasien</span>
                                <span class="icon is-small">
                                <i class="fas fa-plus"></i>
                                </span>
                            </a>
                        </div>
                        <div class="tile is-child">
                            <p class="is-size-3 has-text-weight-semibold">Pendaftaran Pemeriksaan Baru</p>
                            <a href="{{ url('pendaftaran') }}" class="button is-danger is-outlined">
                                <span>Daftar Periksa</span>
                                <span class="icon is-small">
                                <i class="fas fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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

@endsection 