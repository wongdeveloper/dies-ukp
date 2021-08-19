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
    return view('home.index');
});

// Route::get('/Beranda', function () {
//     return view('home.index');
// });

Route::get('/admin', function () {
    return view('admin.gate');
});

Route::get('/admin/login/in/ucapan', function () {
    return view('admin.login.index');
});

Route::get('/admin/login/in/ucapan/foto', function () {
    return view('admin.login.foto');
});

Route::get('/admin/login/in/ucapan/video', function () {
    return view('admin.login.video');
});

Route::get('/admin/login/in/ucapan/umum', function () {
    return view('admin.login.umum');
});

Route::get('/admin/login/in/kegiatan', function () {
    return view('admin.login.kegiatan');
});

Route::get('/Kegiatan/{slug}', function () {
    return view('kegiatan.template');
});


Route::get('/Tentang', function () {
    return view('tentang.index');
});



Route::get('/Kegiatan', function () {
    return view('kegiatan.index');
});

Route::get('/Ucapan', function () {
    return view('ucapan.index');
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