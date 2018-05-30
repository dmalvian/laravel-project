@extends('base-dashboard')    

@section('title','Dashboard')

@section('content')
<div class="column is-10 is-offset-1">
    <h2 class="title">Data Rekam Medik</h2>
    <nav class="level">
        <!-- Left side -->
        <div class="level-left">
            <p class="level-item"><a class="button is-success">Tambah</a></p>
        </div>
        
        <!-- Right side -->
        <div class="level-right">
            <div class="level-item">
            <div class="field has-addons">
                <p class="control">
                <input class="input" type="text" placeholder="Find a data">
                </p>
                <p class="control">
                <button class="button">
                    Search
                </button>
                </p>
            </div>
            </div>
        </div>
    </nav>
    <table class="table is-fullwidth is-bordered is-striped">
        <thead>
            <tr>
                <th>No KTP</th>
                <th>Nama Pasien</th>
                <th>KTP</th>
                <th>Gol. Darah</th>
                <th>Kota</th>
                <th>Nomor BPJS</th>
                <th>Nomor Rujukan</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
@endsection 