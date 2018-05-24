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
                                <p class="step-title">Account</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">2</div>
                                <div class="step-details">
                                <p class="step-title">Account</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">3</div>
                                <div class="step-details">
                                <p class="step-title">Account</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">4</div>
                                <div class="step-details">
                                <p class="step-title">Account</p>
                                </div>
                            </div>
                            <div class="step-item is-active">
                                <div class="step-marker">5</div>
                                <div class="step-details">
                                <p class="step-title">Account</p>
                                </div>
                            </div>
                        
                            <div class="steps-content">
                                <div class="step-content has-text-centered is-active">
                                    <h2 class="subtitle">Langkah 1</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Langkah 2</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Langkah 3</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Langkah 4</h2>
                                </div>
                                <div class="step-content has-text-centered">
                                    <h2 class="subtitle">Langkah 5</h2>
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