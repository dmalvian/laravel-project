@extends('base')

@section('title','Guide')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/bulma-steps.min.css') }}">
    <script defer src="{{ asset('js/bulma-steps.min.js') }}"></script>
@endsection

@section('content')
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <h2 class="title has-text-centered">Langkah Pendaftaran</h2>
                        <div class="steps" id="stepsDemo">
                            <div class="step-item is-active">
                                <div class="step-marker">1</div>
                                <div class="step-details">
                                <p class="step-title">Registrasi Akun</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">2</div>
                                <div class="step-details">
                                <p class="step-title">Registrasi Pasien Baru</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">3</div>
                                <div class="step-details">
                                <p class="step-title">Pendaftaran</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">4</div>
                                <div class="step-details">
                                <p class="step-title">Konfirmasi Pendaftaran</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">5</div>
                                <div class="step-details">
                                <p class="step-title">Pendaftaran Berhasil</p>
                                </div>
                            </div>
                        
                            <div class="steps-content">
                                <div class="step-content has-text-centered is-active">
                                    <h2 class="subtitle">Membuat akun baru apabila pasien belum memiliki akun.</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Apabila ingin melakukan pendaftaran pasien harus mengisi data diri.</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Pasien melakukan pendaftaran.</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Pasien mengecek ulang identitas diri.</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Pendaftaran telah berhasil dilakukan.</h2>
                                </div>
                            </div>
                            <div class="steps-actions">
                                <div class="steps-action">
                                    <a href="#" data-nav="previous" class="button is-dark is-outlined">Previous</a>
                                </div>
                                <div class="steps-action">
                                    <a href="#" data-nav="next" class="button is-dark is-outlined">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection