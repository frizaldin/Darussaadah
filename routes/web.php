<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Cara 1
// Route::get('/', [UserController::class, 'index']);
// Route::get('/create', [UserController::class, 'index']);
// Route::get('/update', [UserController::class, 'index']);
// Route::get('/show', [UserController::class, 'index']);

//Cara 2
Route::get('/', function () {
    return view('frontend.index', [
        'header' => Header::first(),
        'about' => About::first(),
        'gallery' => Gallery::get(),
        'service' => Service::get()
    ]);
});

Route::get('/backend', function () {
    return view('dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'add');
        Route::get('/edit/{id}', 'edit');
        Route::post('/create', 'create');
        Route::post('/update', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});

Route::controller(ServiceController::class)->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'add');
        Route::get('/edit/{id}', 'edit');
        Route::post('/create', 'create');
        Route::post('/update', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});
Route::controller(EdukasiController::class)->group(function () {
    Route::prefix('edukasi')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'add');
        Route::get('/edit/{id}', 'edit');
        Route::post('/create', 'create');
        Route::post('/update', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});
Route::controller(GalleryController::class)->group(function () {
    Route::prefix('galleries')->group(function () {
        Route::get('/', 'index')->name('gallery.index');
        Route::get('/add', 'add');
        Route::get('/edit/{id}', 'edit');
        Route::post('/create', 'create');
        Route::post('/update', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});

Route::controller(SkillController::class)->group(function () {
    Route::prefix('skill')->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'add');
        Route::get('/edit/{id}', 'edit');
        Route::post('/create', 'create');
        Route::post('/update', 'update');
        Route::delete('/delete/{id}', 'delete');
    });
});

Route::controller(AboutController::class)->group(function () {
    Route::prefix('about-us')->group(function () {
        Route::get('/', 'index');
        Route::post('/update', 'update');
    });
});

Route::controller(HeaderController::class)->group(function () {
    Route::prefix('headers')->group(function () {
        Route::get('/', 'index');
        Route::post('/update', 'update');
    });
});



//Cara 3
// Route::resource('user', UserController::class);
