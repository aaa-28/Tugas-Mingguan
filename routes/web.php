<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;  
use App\Http\Controllers\MahasiswaController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Muhammad Aqil Mirip Dilan",
        "nohp" => "085228496778",
        "foto" => "images/henny.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class,'index']);


Route::get('/berita/{slug}', [BeritaController::class, 'phptampildata']); 

Route::get('/mahasiswa', [MahasiswaController::class,'index'])->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class,'tambahmahasiswa'])->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class,'insertdata'])->name('insertdata');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
        
    ]);
});