@extends('base-dashboard')    

@section('title','Dashboard')

@section('content')
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
                    <a href="{{ url('pasien') }}" class="button is-info is-outlined">
                        <span>List Pasien</span>
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
@endsection 