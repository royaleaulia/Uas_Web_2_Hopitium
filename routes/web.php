<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien', function () {
    return view('pasien', [
        "title" => "Pasien"
        ]);
});

Route::get('/dokter', function () {
    return view('dokter', [
        "title" => "Dokter"
    ]);
});

Route::get('/perawat', function () {
    return view('perawat', [
        "title" => "Perawat"
    ]);
});

Route::get('/kamar', function () {
    return view('kamar', [
        "title" => "Kamar"
    ]);
});

Route::get('/obat', function () {
    return view('obat', [
        "title" => "Obat"
    ]);
});

Route::get('/petugas_administrasi', function () {
    return view('petugas_administrasi', [
        "title" => "Petugas Administrasi"
    ]);
});
