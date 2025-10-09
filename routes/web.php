<?php

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
        "nohp" => "0895377009138",
        "foto" => "images/aqiladudu.jpg",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Hot News 1",
            "penulis" => "Iqbal",
            "konten" => "Pemberontakan Kecil Kecilan Terjadi Di Meteseh",
        ],
        [
            "judul" => "Hot News 2",
            "penulis" => "Parman",
            "konten" => "Pengamen Buntung Ternyata Buntung Jadi Jadian",
        ],
        [
            "judul" => "Hot News 3",
            "penulis" => "Supri",
            "konten" => "Penjual Ayam Geprek Menggunakan Ayam Tiren",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});