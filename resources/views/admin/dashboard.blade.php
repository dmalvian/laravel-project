@extends('base-admin-dashboard')    

@section('title','Dashboard')

@section('content')
<div class="column is-10 is-offset-1">
    <h2 class="title">Data Rekam Medik</h2>
    <nav class="level">
        <!-- Left side -->
        <div class="level-left">
            <p class="level-item"><a href="{{ url('admin/add') }}"class="button is-success">Tambah</a></p>
        </div>
        
        <!-- Right side -->
        <div class="level-right">
                <form class="offset-sm-10" action="{{ url('admin/cari') }}" action="post">
                    <div class="field has-addons">
                        <div class="control">
                            <input class="input offset-8" name="keyword" type="text" placeholder="Find a data">
                        </div>
                        <div class="control">
                            <button class="button offset-2" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </nav>
    <table class="table is-fullwidth is-bordered is-striped">
        <thead>
            <tr>
                <th>Tanggal Periksa</th>
                <th>Nama Pasien</th>
                <th>Spesialis</th>
                <th>Dokter</th>
                <th>Pemeriksaan</th>
                <th>Diagnosa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pasien as $data)
            <tr>
                <td>{{ $data -> tgl_rm }}</td>
                <td>{{ $data -> npasien }}</td>
                <td>{{ $data -> nspesialis }}</td>
                <td>{{ $data -> ndokter }}</td>
                <td>{{ $data -> pemeriksaan }}</td>
                <td>{{ $data -> diagnosa }}</td>
            </tr>
        @endforeach
       </tbody>
    </table>
</div>
@endsection 