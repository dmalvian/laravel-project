@extends('base')    

@section('title','Konfirmation')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Konfirmation</h3>
                        <div class="box">
                            <form action="{{ url('konfirmasi') }}" method="post">
                            @csrf
                                <div class="field">
                                    <label class="label">Nama Pasein</label>
                                    <div class="control">
                                    <input class="input has-text-centered" type="text" name="nama" value="{{ $pendaftar[4] }}" readonly>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Tanggal Periksa</label>
                                    <div class="control">
                                    <input class="input has-text-centered disabled" type="text" name="tgl_periksa" value="{{ $pendaftar[0] }}" readonly>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Rumah Sakit</label>
                                    <div class="control">
                                    <input class="input has-text-centered" type="text" name="rumah_sakit" value="{{ $pendaftar[1] }}" readonly>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Spesialis</label>
                                    <div class="control">
                                    <input class="input has-text-centered" type="text" name="spesialis" value="{{ $pendaftar[2] }}" readonly>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Dokter</label>
                                    <div class="control">
                                    <input class="input has-text-centered" type="text" name="dokter" value="{{ $pendaftar[3] }}" readonly>
                                    </div>
                                </div>
                                <a href="{{ url('pendaftaran')}}" class="button is-danger is-medium">Tidak Benar</a>
                                <button class="button is-info is-medium" type="submit">Benar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection