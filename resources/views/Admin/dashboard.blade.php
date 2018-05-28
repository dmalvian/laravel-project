@extends('base')    

@section('title','Admin Login')

@section('content')  
    <a href="{{ url('logout')}}">Logout</a>
    <br>
    {{ session()->get('rumah_sakit') }}
    

@endsection