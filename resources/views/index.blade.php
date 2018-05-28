@extends('base')

@section('title','Landing Page')

@section('assets')
  <link rel="stylesheet" href="{{ asset('css/bulma-carousel.min.css') }}">
<script defer src="{{ asset('js/bulma-carousel.min.js') }}"></script>
  <style>
    .carousel-cover {
      background: linear-gradient(
          rgba(0, 0, 0, 0.5),
          rgba(0, 0, 0, 0.5)
        );
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      z-index:2;
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .footer-content {
      padding: 1.5em;
      background: rgba(0,0,0,.5);
    }

    .cust-font {
            font-family: "Bodoni MT Black", sans-serif;
        }
  </style>
@endsection

@section('content')
  <section class="hero is-fullheight is-primary has-carousel">
    <div class="hero-carousel carousel-animated carousel-animate-fade" data-autoplay="true">
      <div class="carousel-cover"></div>
      <div class='carousel-container'>
        <div class='carousel-item has-background is-active'>
          <img class="is-background" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-2.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-3.jpg') }}" alt="" />
        </div>
        <div class='carousel-item has-background'>
          <img class="is-background" src="{{ asset('img/carousel-4.jpg') }}" alt="" />
        </div>
      </div>
      <div class="carousel-navigation is-overlay">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>

    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a href="#" class="navbar-item">
              <h2 class="title cust-font">RSing</h2>
            </a>
            <span class="navbar-burger burger" data-target="navMenuHero">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navMenuHero" class="navbar-menu">
            <div class="navbar-end">
              <span class="navbar-item">
                <a href="{{ url('register') }}" class="button is-white is-outlined">
                  <span class="icon">
                    <i class="fa fa-address-book"></i>
                  </span>
                  <span>Sign Up</span>
                </a>
              </span>
              <span class="navbar-item">
                <a href="{{ url('signin') }}" class="button is-white is-outlined">
                  <span class="icon">
                    <i class="fa fa-lock"></i>
                  </span>
                  <span>Sign In</span>
                </a>
              </span>
              <span class="navbar-item">
                <a href="{{ url('guide') }}" class="button is-white is-outlined">
                  <span class="icon">
                    <i class="fa fa-book"></i>
                  </span>
                  <span>Guide</span>
                </a>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="hero-foot">
      <div class="container is-fullhd">
        <div class="content has-text-centered footer-content">
          <p>&copy; 2018 - Rumah Sakit Dalam Jaringan (Online)
          </p>
        </div>
      </div>
    </div>
  </section>

  <script> 
      document.addEventListener('DOMContentLoaded', function(){
        var carousels = bulmaCarousel.attach();

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

          // Add a click event on each of them
          $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

              // Get the target from the "data-target" attribute
              var target = $el.dataset.target;
              var $target = document.getElementById(target);

              // Toggle the class on both the "navbar-burger" and the "navbar-menu"
              $el.classList.toggle('is-active');
              $target.classList.toggle('is-active');

            });
          });
        }
      }, false);
    </script>
@endsection