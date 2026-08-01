<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

Route::get('/', HomeController::class)->name('home');

Route::get('/profil', ProfilController::class)->name('profil');
Route::get('/demografi', DemografiController::class)->name('demografi');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/wisata/{slug}', [WisataController::class, 'show'])->name('wisata.show');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm');
Route::get('/umkm/{slug}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/galeri', GaleriController::class)->name('galeri');
Route::get('/layanan', LayananController::class)->name('layanan');
Route::get('/kontak', KontakController::class)->name('kontak');