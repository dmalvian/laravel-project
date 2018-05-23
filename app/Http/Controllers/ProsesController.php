<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Akun;
use App\Pasien;
use App\Periksa;
use App\RS;
use App\Spesialis;
use App\Dokter;

class ProsesController extends Controller
{
    public function index()
    {
        if(session()->get('username')!= null){
            return redirect('dashboard');
        }else{
            return view('index');
        }
            
    }

    public function createSignIn()
    {
        if(session()->get('username')!= null){
            return redirect('dashboard');
        }else{
            return view('signin');
        }
            
    }

    public function createRegister()
    {
        if(session()->get('username')!= null){
            return redirect('dashboard');
        }else{
            return view('signup');
        }
    } 

    public function Register(Request $request)
    {
        $akun = new Akun();
        $validate = Akun::whereRaw("username = '$request->username'")->first();
        if($validate)
        {
            return redirect('register')->with('message','Username Telah Digunakan');
        }else{
            $akun -> username = $request -> username;
            $akun -> nama_lengkap = $request -> nama;
            $akun -> no_ktp = $request -> no_ktp;
            $akun -> no_hp = $request -> no_hp;
            $akun -> alamat = $request -> alamat;
            $akun -> password = $request -> password;
            $akun -> save();

            return redirect('signin');
        }
    }

    public function signin(Request $request)
    {
            $username 	= $request -> username;
            $password 	= $request -> password;
            $users = Akun::whereRaw("username = '$username' && password = '$password'")->first();

            if($username && $password) {
                if(!$users){
                    return redirect('/signin')->with('message', 'Gagal login email atau password salah !');
                }else{
                    $request->session()->put('username', $users -> username);
                    $request->session()->put('id', $users -> Id_akun);
                    return redirect('dashboard');
                }
            }else{
                return redirect('signin')->with('message', 'Anda belum mengisi email dan password dengan benar !');
            }        
    }

    public function gotoDashboard()
	{
        if(session()->get('username')!= null) return view('dashboard');
        
		return redirect('signin')->with('message','Login Dulu!');
    }
    
    public function getLogout() {
        session()->flush();
        return redirect('signin');
    }

    public function createPasien()
    {
        if(session()->get('username')!= null){
            return view('pasien.create');
        }else{
            return redirect('dashboard');
        }
    }

    public function storePasien(Request $request)
    {
        $validate = Pasien::whereRaw("no_ktp = '$request->no_ktp'")->first();
        if($validate)
        {
            return redirect('/pasien/create')->with('message','Pasien Sudah Terdaftar');
        }else{
            $akun = Akun::whereRaw("username = '".session()->get('username')."'")->first();
            $pasien = new Pasien();
            $pasien -> no_ktp = $request -> no_ktp ;
            $pasien -> id_akun = $akun -> Id_akun ;
            $pasien -> nama_pasien = $request -> nama  ;
            $pasien -> no_hp = $request -> no_hp ;
            $pasien -> tgl_lahir = $request -> tgl_lahir ;
            $pasien -> jenis_kelamin = $request -> gender ;
            $pasien -> agama = $request -> agama ;
            $pasien -> golongan_darah = $request -> gol_darah ;
            $pasien -> pekerjaan = $request -> pekerjaan ;
            $pasien -> status_perkawinan = $request -> status_kawin ;
            $pasien -> kewarganegaraan = $request -> kewarganegaraan ;
            $pasien -> alergi = $request -> alergi ;
            $pasien -> provinsi = $request -> provinsi ;
            $pasien -> kota = $request -> kota ;
            $pasien -> kecamatan = $request -> kecamatan ;
            $pasien -> kode_pos = $request -> kode_pos ;
            $pasien -> nomor_bpjs = $request -> no_bpjs ;
            $pasien -> nomor_rujukan = $request -> no_rujukan ;

            $pasien->save();

            return redirect('dashboard');
        }
    }

    public function createPendaftaran()
    {

        if(session()->get('username')!= null){
            return view('pendaftaran');
        }else{
            return redirect('dashboard');
        }
    }

    public function storePendaftar(Request $request)
    {
        $getdokter = $request -> dokter;
        $gettanggal = $request -> tgl_periksa;
        $getrs = $request -> rumah_sakit;
        $getspesialis = $request -> spesialis;
        $getnama = $request -> nama;

        $pasien = Pasien::whereRaw("nama_pasien = '".$getnama."'")->first();
        $validate = Periksa::whereRaw("rumah_sakit = '$getrs' && spesialis = '$getspesialis' && tgl_periksa = '$gettanggal' && dokter = '$getdokter' && no_ktp = '".$pasien -> no_ktp."'")->first();

        if($validate)
        {
            return redirect('pendaftaran')->with('message','Pasien sudah mendaftar pada hari tersebut!');
        }else{

            $pendaftar = new Periksa();
            $pendaftar -> tgl_periksa = $gettanggal ;
            $pendaftar -> rumah_sakit = $getrs ;
            $pendaftar -> spesialis = $getspesialis ;
            $pendaftar -> dokter = $getdokter ;
            $pendaftar -> no_ktp = $pasien -> no_ktp  ;

            $pendaftar->save();

            //get data
            $daftar = Periksa::whereRaw("tgl_periksa = '$gettanggal' && dokter = '$getdokter'")->get();
            //give name json
            $output = json_encode(array('urutan' => $daftar));
            //get data with index;
            

            //return $output;

            return view('result',compact('output'));
        }
    }

    public function pendaftaran(Request $request)
    {
        $rs = RS::whereRaw("kode_RS = '".$request -> rumah_sakit."'")->first();
        $spesialis = Spesialis::whereRaw("kode_spesialis = '".$request -> spesialis."'")->first();
        $dokter = Dokter::whereRaw("NIDN = '".$request -> dokter."'")->first();

        $pendaftar = array(
            $request -> tgl_periksa,
            $rs -> nama_RS, 
            $spesialis -> nama_spesialis,
            $dokter -> nama_dokter,
            $request -> pasien);

        return view('konfirmation',compact('pendaftar'));
    }

    public function patient()
    {
        if(session()->get('username')!= null){
           $pasien = Pasien::whereRaw("id_akun = '". session()->get('id')."'")->get();

           return response()->json($pasien);
        }else{
            return redirect('dashboard');
        }
    }
}
