<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// Halaman About
Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Chrysels Nicha Aime Laoh',
        'kelas' => 'D4SM-48-01',
        'nim' => '707082400010',
    ]);
})->name('about');

// Halaman latihan daftar mata kuliah
Route::get('/latihan', function () {
    $matakuliah = [
        'Pemrograman Web',
        'Basis Data',
        'UI/UX',
    ];

    return view('pages.latihan', [
        'matakuliah' => $matakuliah,
    ]);
})->name('latihan');

// Halaman daftar produk
Route::get('/product', function () {
    $produk = [
        ['nama' => 'Pemrograman Web Interaktif 2', 'stok' => 4, 'harga' => 15000],
        ['nama' => 'Augmented Reality', 'stok' => 4, 'harga' => 23000],
        ['nama' => 'Gim Visual Novel', 'stok' => 4, 'harga' => 32000],
        ['nama' => 'Teknik Produksi Audio', 'stok' => 4, 'harga' => 21000],
    ];

    return view('pages.product', [
        'produk' => $produk,
    ]);
})->name('product');