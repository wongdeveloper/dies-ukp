<?php

use App\Http\Controllers\WishController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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

// Route::get('/admin', function () {
//     return view('admin.gate');
// });

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    // Route::post('/login', [AdminController::class, 'login'])->name('login');
    Route::prefix('ucapan')->name('ucapan.')->middleware(['admin'])->group(function(){
        Route::get('/', [AdminController::class, 'wish_index'])->name('index');
        Route::get('/create', [AdminController::class, 'wish_create'])->name('create');
        Route::post('/store', [AdminController::class, 'wish_store'])->name('store');
        Route::get('/edit/{id}', [AdminController::class, 'wish_edit'])->name('edit');
        Route::post('/update', [AdminController::class, 'wish_update'])->name('update');
        Route::get('/destroy/{id}', [AdminController::class, 'wish_destroy'])->name('destroy');

        Route::prefix('foto')->name('photo.')->middleware(['admin'])->group(function () {
            Route::get('/', [AdminController::class, 'photo_index'])->name('index');
            Route::get('/create', [AdminController::class, 'photo_create'])->name('create');
            // Route::post('/store', [AdminController::class, 'photo_store'])->name('store');
            Route::get('/edit/{id}', [AdminController::class, 'photo_edit'])->name('edit');
            // Route::post('/update', [AdminController::class, 'photo_update'])->name('update');
            // Route::get('/destroy/{id}', [AdminController::class, 'photo_destroy'])->name('destroy');
        });

        Route::prefix('video')->name('video.')->middleware(['admin'])->group(function () {
            Route::get('/', [AdminController::class, 'video_index'])->name('index');
            Route::get('/create', [AdminController::class, 'video_create'])->name('create');
            Route::post('/store', [AdminController::class, 'video_store'])->name('store');
            Route::get('/edit/{id}', [AdminController::class, 'video_edit'])->name('edit');
            Route::post('/update', [AdminController::class, 'video_update'])->name('update');
            // Route::get('/destroy/{id}', [AdminController::class, 'video_destroy'])->name('destroy');
        });
        Route::prefix('umum')->name('general.')->middleware(['admin'])->group(function () {
            Route::get('/', [AdminController::class, 'general_index'])->name('index');
            Route::get('/create', [AdminController::class, 'general_create'])->name('create');
            // Route::post('/store', [AdminController::class, 'general_store'])->name('store');
            Route::get('/edit/{id}', [AdminController::class, 'general_edit'])->name('edit');
            // Route::post('/update', [AdminController::class, 'general_update'])->name('update');
            // Route::get('/destroy/{id}', [AdminController::class, 'general_destroy'])->name('destroy');
        });
    });

    Route::prefix('kegiatan')->name('blog.')->middleware(['admin'])->group(function(){
        // Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/', [BlogController::class, 'admin'])->name('admin')->middleware(['admin']);
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update', [BlogController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [BlogController::class, 'destroy'])->name('destroy');
    });
});

// Route::get('/admin/login/in/ucapan', function () {
//     return view('admin.login.index');
// });

// Route::get('/admin/login/in/ucapan/foto', function () {
//     return view('admin.login.foto');
// });

// Route::get('/admin/login/in/ucapan/video', function () {
//     return view('admin.login.video');
// });

// Route::get('/admin/login/in/ucapan/umum', function () {
//     return view('admin.login.umum');
// });

// Route::get('/admin/login/in/kegiatan/create/artikel', function () {
//     return view('admin.create.article');
// });

// Route::get('/admin/login/in/kegiatan/create/video', function () {
//     return view('admin.create.video');
// });
// Route::get('/admin/login/in/kegiatan/create/teks', function () {
//     return view('admin.create.teks');
// });

// Route::get('/admin/login/in/kegiatan', function () {
//     return view('admin.login.kegiatan');
// });


Route::get('/Tentang', function () {
    return view('tentang.index');
});

Route::get('/Kegiatan', [BlogController::class, 'index'])->name('blog.index');

Route::get('/Kegiatan/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('Ucapan')->name('ucapan.')->group(function(){
    Route::get('/', [WishController::class, 'index'])->name('index');
    Route::get('/Video', [WishController::class, 'video'])->name('video');
    Route::get('/Foto', [WishController::class, 'image'])->name('image');
    Route::get('/Teks', [WishController::class, 'text'])->name('text');
});

Route::prefix('wish')->name('wish.')->group(function(){
    Route::post('/store', [WishController::class, 'store'])->name('store');
});