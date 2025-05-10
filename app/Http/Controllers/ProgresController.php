<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgresController extends Controller
{
    public function progres(){
        return view('pages.progres');
    }
    public function progres_trainer(){
        return view('pages.trainer.progres');
    }
}
