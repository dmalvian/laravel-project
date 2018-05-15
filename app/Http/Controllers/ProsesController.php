<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }
}
