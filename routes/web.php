<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// menampilkan data diri Anda
Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Chrysels Nicha Aime Laoh',
        'kelas'=> 'D4SM-48-01',
        'nim' => '707082400010',
    ]);
})->name('about');