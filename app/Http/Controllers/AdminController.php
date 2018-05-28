<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function createsignIn()
    {
        if(session()->get('rumah_sakit')!= null){
            return redirect('admin/dashboard');
        }else{
            return view('admin/admin');
        }
    }

    public function signIn(Request $request)
    {
        $username 	= $request -> username;
        $password 	= $request -> password;
        $users = Admin::whereRaw("username = '$username' && password = '$password'")->first();

        if($username && $password) {
            if(!$users){
                return redirect('/admin')->with('message', 'Gagal login email atau password salah !');
            }else{
                $request->session()->put('rumah_sakit', $users -> rumah_sakit);
                alert()->success('Post Created', 'Successfully');
                return redirect('admin/dashboard');
            }
        }else{
            return redirect('admin')->with('message', 'Anda belum mengisi email dan password dengan benar !');
        }        
    }
    public function dashboard()
    {
        if(session()->get('rumah_sakit')!= null){
            return view('admin/dashboard');
        } 
        
		return redirect('admin')->with('message','Bukan Admin Ya !');
    }

    public function logout()
    {
        session()->flush();
        return redirect('admin');
    }
}
