<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Akun;

class ProsesController extends Controller
{

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
            
            if($username && $password) {
                $users = Akun::whereRaw("username = '$username' && password = '$password'")->first();
                if(!$users){
                        return redirect('/signin')->with('message', 'Gagal login email atau password salah !');
                }else{
                    $request->session()->put('username', $users -> username);
                    return view('dashboard');
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
}
