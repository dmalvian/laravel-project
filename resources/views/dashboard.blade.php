@extends('base')    

@section('title','Logout')

@section('assets')
    <a href="{{ url('logout') }}">Logout</a>
    <p>{{ dd(session()->get('username')) }}</p>
@endsection 