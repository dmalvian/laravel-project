@extends('base')    

@section('title','Success')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Pendaftaran Berhasil</h3>
                        
                        <div class="box has-text-centered">
                            <figure>
                            <img src="{{ url('qr-code/12345') }}" alt="">
                            </figure>
                            <h2 class="subtitle">12345</h2>
                            <h3>No Urut : {{ $daftar }}</h3>
                        </div>
                        <p class="has-text-grey">
                            Konfirmasi pendaftaran akan dikirimkan via SMS.
                        </p>
                        <div class="buttons has-addons is-centered" style="margin-top: 20px;">
                            <a href="{{ url('dashboard') }}" class="button is-dark is-outlined">
                                <span class="icon is-small">
                                    <i class="fas fa-home"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                            <a class="button is-dark is-outlined">
                                <span class="icon is-small">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span>Print</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection
