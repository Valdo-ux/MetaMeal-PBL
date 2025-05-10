<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProgresController;
use Illuminate\Support\Facades\Route;

//LANDING PAGES
Route::get('/', [LandingpageController::class, 'home'])->name('landing');
Route::prefix('landing')->controller(LandingpageController::class)->group(function (){
    Route::get('/about', 'about')->name('about');
    Route::get('/fitur', 'fitur')->name('fitur');
});

//NOTIFIKASI 
Route::prefix('/')->controller(NotifikasiController::class)->group(function(){
    Route::get('/notifikasi', 'notifikasi')->name('notifikasi');
});

//PROGRES
Route::prefix('/progres')->controller(ProgresController::class)->group(function(){
    Route::get('/', 'progres')->name('progres');
    Route::get('/trainer', 'progres_trainer')->name('progres-trainer');
});