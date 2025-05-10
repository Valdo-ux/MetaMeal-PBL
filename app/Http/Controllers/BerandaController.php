<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        return view('pages.beranda');
    }
    public function beranda_trainer(){
        return view('pages.trainer.beranda');
    }
}
