@extends('base')    

@section('title','Dashboard')

@section('assets')

    <a href="{{ url('logout') }}">Logout</a> 
    <br>
    <a href="{{ url('/pasien/create') }}">Daftarkan Pasien Baru</a>
    <br>
    <a href="{{ url('/pendaftaran') }}">Daftar </a>
    <p>Username : {{ dd(session()->get('id')) }}</p>
@endsection 