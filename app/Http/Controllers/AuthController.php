<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }
    public function daftar(){
        return view('pages.auth.daftar');
    }
}
