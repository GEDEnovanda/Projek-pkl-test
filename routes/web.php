<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Sesicontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/coba', function () {
    return view('coba');
})->name('coba');

Route::get('/template/index-side', function () {
    return view('Template.index-side');
})->name('template.index-side');

Route::get('/Users', [UserController::class, 'loadAllUsers']);
// Route::get('/Galeris/index', [GaleriController::class, 'index']);
// Route::get('/Blogs/index', [GaleriController::class, 'index']);
Route::get('/add/user', [UserController::class, 'loadaddUserForm']);
Route::post('/add-user', [UserController::class, 'store'])->name('AddUser');
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::get('/products/image/{filename}', [ProductController::class, 'showImage'])->name('products.image');
// Route::resource('/Galeris', \App\Http\Controllers\GaleriController::class);
// Route::get('/Galeris/image/{filename}', [GaleriController::class, 'showImage'])->name('Galeris.image');
// Route::resource('/Blogs', \App\Http\Controllers\BlogController::class);
// Route::get('/Blogs/image/{filename}', [BlogController::class, 'showImage'])->name('Blogs.image');


// Middleware untuk Backoffice
    Route::middleware(['auth'])->group(function () {
    Route::get('/Users', [UserController::class, 'loadAllUsers']);
    Route::get('/Galeris/index', [GaleriController::class, 'index']);
    Route::get('/Blogs/index', [BlogController::class, 'index']);
    Route::resource('/Galeris', \App\Http\Controllers\GaleriController::class);
    Route::get('/Galeris/image/{filename}', [GaleriController::class, 'showImage'])->name('Galeris.image');
    Route::resource('/Blogs', \App\Http\Controllers\BlogController::class);
    Route::get('/Blogs/image/{filename}', [BlogController::class, 'showImage'])->name('Blogs.image');
    Route::get('/Backoffice', [UserController::class, 'loadAllbackoffice'])->name('backoffice');
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [Sesicontroller::class, 'logout'])->name('logout');
});

// Route untuk login (tanpa middleware auth)
Route::middleware(['guest'])->group(function () {
    Route::get('/yayasan-backoffice', [Sesicontroller::class, 'index'])->name('login');
    Route::post('/yayasan-backoffice', [Sesicontroller::class, 'Login']);
});


