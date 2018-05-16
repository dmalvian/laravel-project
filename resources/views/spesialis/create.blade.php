@extends('base')    

@section('title','Sign Up')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <h3 class="title has-text-grey has-text-centered">Spesialis</h3>
                        <p class="subtitle has-text-grey has-text-centered">Add a New Specialist</p>
    
                        <div class="box">
                            <form action="{{ url('Register') }}" method="post">
                            {{ csrf_field() }}
                                <div class="field">
                                    <label class="label">Kode Spesialis</label>
                                    <div class="control">
                                    <input class="input" type="text" name="kode_spesialis" placeHolder="Kode Spesialis" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nama Spesialis</label>
                                    <div class="control">
                                    <input class="input" type="text" name="nama_spesialis" placeHolder="Nama Spesialis" required> 
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