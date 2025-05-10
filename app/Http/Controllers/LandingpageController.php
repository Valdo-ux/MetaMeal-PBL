<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function home(){
        return view('pages.landing.landingpg');
    }
    public function fitur(){
        return view('pages.landing.fitur');
    }
    public function about(){
        return view('pages.landing.about');
    }
}
