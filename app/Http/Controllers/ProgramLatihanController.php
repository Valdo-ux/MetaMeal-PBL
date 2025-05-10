<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramLatihanController extends Controller
{
    public function programlatihan(){
        return view('pages.programlatihan');
    }
    public function programlatihan_trainer(){
        return view('pages.trainer.programlatihan');
    }
}
