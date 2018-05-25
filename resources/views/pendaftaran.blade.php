@extends('base')    

@section('title','Pendaftaran Pemeriksaan')

@section('assets')
<script
  src="{{ asset('js/jquery-3.3.1.min.js') }}"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $.getJSON("{{ url('medic/rs') }}", function(result){
            $.each(result, function(i, item){
                $("<option>"+item.nama_RS+"</option>").attr('value', item.kode_RS).appendTo("#rumah_sakit");
            });
        });

        $("#rumah_sakit").change(function() {
            var id_spesialis = $('option:selected', this).attr('value');
            $.getJSON("{{ url('medic/spesialis') }}/"+id_spesialis, function(result){
                $("#spesialis").html($("<option>Pilih Spesialis</option>").attr('value', ''));
                $("#dokter").html($("<option>Pilih Dokter</option>").attr('value', ''));
                $.each(result, function(i, item){
                    $("<option>"+item.nama_spesialis+"</option>").attr('value', item.kode_spesialis).appendTo("#spesialis");
                });
            });
        });

        $("#spesialis").change(function() {
            var id_dokter = $('option:selected', this).attr('value');
            $.getJSON("{{ url('medic/dokter') }}/"+id_dokter, function(result){
                $("#dokter").html($("<option>Pilih Dokter</option>").attr('value', ''));
                $.each(result, function(i, item){
                    $("<option>"+item.nama_dokter+" - "+item.hari+"</option>").attr('value', item.NIDN).appendTo("#dokter");
                });
            });
        });

        $.getJSON("{{ url('patient') }}", function(result){
            $.each(result, function(i, item){
                $("<option>"+item.nama_pasien+"</option>").attr('value', item.nama_pasien).appendTo("#pasien");
            });
        });
    });
</script>
@endsection

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <h3 class="title has-text-grey has-text-centered">Pendaftaran Pemeriksaan</h3> 
                        @if ( Session::get('message') != '' )
                            <p class="subtitle has-text-danger has-text-centered">{{ Session::get('message') }}</p>
                        @else
                            <p class="subtitle has-text-grey has-text-centered">Ayo Periksa!</p>
                        @endif
                        </p>
    
                        <div class="box">
                            <form action="{{ url('/pendaftaran') }}" method="post">
                            {{ csrf_field() }}
                                <div class="field">
                                    <label class="label">Tanggal Periksa</label>
                                    <div class="control">
                                    <input class="input" type="date" name="tgl_periksa" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Rumah Sakit</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="rumah_sakit" id="rumah_sakit" required>
                                                <option value="">Pilih Rumah Sakit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Spesialis</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="spesialis" id="spesialis" required>
                                                <option value="">Pilih Spesialis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Dokter</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="dokter" id="dokter" required>
                                                <option value="">Pilih Dokter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Pasien</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="pasien" id="pasien" required>
                                                <option value="">Pilih Pasien</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="control">
                                    <button class="button is-info is-medium" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection