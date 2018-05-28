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
                <th>Gol. Darah</th>
                <th>Kota</th>
                <th>Nomor BPJS</th>
                <th>Nomor Rujukan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $a)
            <tr>
                <td>{{ $a->no_ktp }}</td>
                <td>{{ $a->nama_pasien }}</td>
                <td>{{ $a->tgl_lahir }}</td>
                <td>{{ $a->golongan_darah }}</td>
                <td>{{ $a->nkota }}</td>
                <td>{{ $a->nomor_bpjs }}</td>
                <td>{{ $a->nomor_rujukan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 