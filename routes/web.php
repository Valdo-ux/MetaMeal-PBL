<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProgresController;
use App\Http\Controllers\ProgramLatihanController;
use App\Http\Controllers\ResepMakanController;
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

//PROGRAM LATIHAN
Route::prefix('/programlatihan')->controller(ProgramLatihanController::class)->group(function(){
    Route::get('/trainee', 'programlatihan')->name('latihan');
    Route::get('/trainer', 'programlatihan_trainer')->name('latihan-trainer');

});

//RESEP MAKAN
Route::prefix('/resepmakan')->controller(ResepMakanController::class)->group(function(){
    Route::get('/', 'resepmakan')->name('resep');
    Route::get('/trainer', 'resepmakan_trainer')->name('resep-trainer');
});