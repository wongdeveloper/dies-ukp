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

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/Ucapan', function () {
    return view('ucapan.index');
});

Route::get('/Ucapan/Video', function () {
    return view('ucapan.video');
});
Route::get('/Ucapan/Foto', function () {
    return view('ucapan.foto');
});
Route::get('/Ucapan/Teks', function () {
    return view('ucapan.teks');
});