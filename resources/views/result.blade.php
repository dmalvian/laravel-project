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
                            <img src="{{ url('qr-code/' . $rand) }}" alt="">
                            </figure>
                            <h2 class="subtitle">{{ $rand }}</h2>
                            <h3>No Urut : {{ $daftar }}</h3>
                        </div>
                        <p class="has-text-grey">
                            Konfirmasi pendaftaran akan dikirimkan via SMS.
                        </p>
                        <p class="has-text-grey">
                            * Anda akan dilayani pada tanggal {{ $ftgl }}. Perkiraan dilayani pukul 10.00 WIB. Dimohon datang sebelum waktu pelayanan. Antrian ini tidak dapat digunakan apabila anda datang lebih dari 15 menit dari waktu perkiraan pelayanan.
                        </p>
                        <div class="buttons has-addons is-centered" style="margin-top: 20px;">
                            <a href="{{ url('dashboard') }}" class="button is-dark is-outlined">
                                <span class="icon is-small">
                                    <i class="fas fa-home"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                            <button onclick="window.print();" class="button is-dark is-outlined">
                                <span class="icon is-small">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span>Print</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection
