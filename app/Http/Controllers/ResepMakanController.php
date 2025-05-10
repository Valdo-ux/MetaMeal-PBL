<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepMakanController extends Controller
{
    public function resepmakan(){
        return view('pages.resepmakan');
    }
    public function resepmakan_trainer(){
        return view('pages.trainer.resepmakan');
    }
}
