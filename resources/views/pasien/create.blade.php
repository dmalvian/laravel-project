@extends('base')    

@section('title','Add New Patient')

@section('assets')
<script
  src="{{ asset('js/jquery-3.3.1.min.js') }}"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $.getJSON("{{ url('address/provinsi') }}", function(result){
            $.each(result, function(i, item){
                $("<option>"+item.name+"</option>").attr('value', item.id).appendTo("#provinsi");
            });
        });

        $("#provinsi").change(function() {
            var id_province = $('option:selected', this).attr('value');
            $.getJSON("{{ url('address/kota') }}/"+id_province, function(result){
                $("#kota").html($("<option>Pilih Kota</option>").attr('value', ''));
                $("#kecamatan").html($("<option>Pilih Kecamatan</option>").attr('value', ''));
                $.each(result, function(i, item){
                    $("<option>"+item.name+"</option>").attr('value', item.id).appendTo("#kota");
                });
            });
        });

        $("#kota").change(function() {
            var id_regency = $('option:selected', this).attr('value');
            $.getJSON("{{ url('address/kecamatan') }}/"+id_regency, function(result){
                $("#kecamatan").html($("<option>Pilih Kecamatan</option>").attr('value', ''));
                $.each(result, function(i, item){
                    $("<option>"+item.name+"</option>").attr('value', item.id).appendTo("#kecamatan");
                });
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
                        <h3 class="title has-text-grey has-text-centered">Patient</h3>
                        @if ( Session::get('message') != '' )
                            <p class="subtitle has-text-danger has-text-centered">{{ Session::get('message') }}</p>
                        @else
                            <p class="subtitle has-text-grey has-text-centered">Tambahkan Pasien Anda!</p>
                        @endif
                        <div class="box">
                            <form action="{{ url('/pasien/create') }}" method="post">
                            @csrf
                                <div class="field">
                                    <label class="label">Nama Lengkap</label>
                                    <div class="control">
                                    <input class="input" type="text" name="nama" placeHolder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">No KTP</label>
                                    <div class="control">
                                    <input class="input" type="number" name="no_ktp" placeHolder="Nomor KTP" required> 
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">No HP</label>
                                    <div class="control">
                                    <input class="input" type="number" name="no_hp" placeHolder="Nomor HP" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="control">
                                    <input class="input" type="date" name="tgl_lahir">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="gender" value="laki-laki">
                                            Laki - laki
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="gender" value="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Agama</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Khatolik">Khatolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Golongan Darah</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="gol_darah">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Pekerjaan</label>
                                    <div class="control">
                                    <input class="input" type="text" name="pekerjaan" placeHolder="Pekerjaan" required> 
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Status Perkawinan</label>
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="status_kawin" value="Belum Menikah">
                                            Belum Menikah
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="status_kawin" value="Menikah">
                                            Menikah
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="status_kawin" value="Janda/Duda">
                                            Janda / Duda
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Status Kewarganegaraan</label>
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="kewarganegaraan" value="WNI">
                                            WNI
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="kewarganegaraan" value="WNA">
                                            WNA
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Alergi</label>
                                    <div class="control">
                                    <textarea class="textarea" name="alergi" id=""></textarea required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Provinsi</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="provinsi" id="provinsi" required>
                                                <option value="">Pilih Provinsi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Kota</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="kota" id="kota" required>
                                                <option value="">Pilih Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Kecamatan</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="kecamatan" id="kecamatan" required>
                                                <option value="">Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Kode Pos</label>
                                    <div class="control">
                                    <input class="input" type="text" name="kode_pos" placeHolder="Kode Pos" required> 
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nomor BPJS</label>
                                    <div class="control">
                                    <input class="input" type="text" name="no_bpjs" placeHolder="Nomor BPJS"> 
                                    <span class="has-text-danger">*Tidak Wajib Diisi</span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nomor Rujukan</label>
                                    <div class="control">
                                    <input class="input" type="text" name="no_rujukan" placeHolder="Nomor Rujukan"> 
                                    <span class="has-text-danger">*Tidak Wajib Diisi</span>
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