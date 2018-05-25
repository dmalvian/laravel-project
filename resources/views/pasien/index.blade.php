@extends('base-dashboard')    

@section('title','Dashboard')

@section('content')
<div class="column is-10 is-offset-1">
    <table class="table is-fullwidth is-bordered is-striped">
        <thead>
            <tr>
                <th>No KTP</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Kecamatan</th>
                <th>Kota</th>
                <th>Provinsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $a)
            <tr>
                <td>{{ $a->no_ktp }}</td>
                <td>{{ $a->nama_pasien }}</td>
                <td>{{ $a->tgl_lahir }}</td>
                <td>{{ $a->nkecamatan }}</td>
                <td>{{ $a->nkota }}</td>
                <td>{{ $a->nprovinsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 