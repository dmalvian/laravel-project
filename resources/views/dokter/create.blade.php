@extends('base')    

@section('title','Add New Doctor')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <h3 class="title has-text-grey has-text-centered">Doctor</h3>
                        <p class="subtitle has-text-grey has-text-centered">Add a New Doctor</p>
    
                        <div class="box">
                            <form action="{{ url('Register') }}" method="post">
                            {{ csrf_field() }}
                                <div class="field">
                                    <label class="label">NIDN</label>
                                    <div class="control">
                                    <input class="input" type="text" name="nidn" placeHolder="Nomor Induk Dokter Nasional" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nama Dokter</label>
                                    <div class="control">
                                    <input class="input" type="text" name="nama_dokter" placeHolder="Nama Dokter" required> 
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Spesialis</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="kd_spesialis">
                                                <option>Pilih Spesialis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Rumah Sakit</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="kd_rs">
                                                <option>Pilih Rumah Sakit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="control">
                                    <button class="button is-info is-medium" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        <p class="has-text-grey has-text-centered">
                            <a href="{{ url('SignIn') }}">Sign In</a> &nbsp;·&nbsp;
                            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                            <a href="../">Need Help?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection