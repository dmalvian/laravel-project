<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Akun;

class ProsesController extends Controller
{

    public function createSignIn()
    {
        return view('signin');
    }

    public function createRegister()
    {
        return view('signup');
    } 

    public function Register(Request $request)
    {
        $akun = new Akun();
        $akun -> username = $request -> username;
        $akun -> nama_lengkap = $request -> nama;
        $akun -> no_ktp = $request -> no_ktp;
        $akun -> no_hp = $request -> no_hp;
        $akun -> alamat = $request -> alamat;
        $akun -> password = $request -> password;
        $akun -> save();

        return redirect('SignIn');
    }
}
