<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/backoffice', function () {
    return view('backoffice');
});
Route::get('/coba', function () {
    return view('coba');
})->name('coba');
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/Users',[UserController::class,'loadAllUsers']);
Route::get('/backoffice', [UserController::class, 'loadAllbackoffice']);
Route::get('/add/user',[UserController::class,'loadaddUserForm']);
Route::post('/add-user', [UserController::class, 'store'])->name('AddUser');
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::get('/products/image/{filename}', [ProductController::class, 'showImage'])->name('products.image');
Route::resource('/Galeris', \App\Http\Controllers\GaleriController::class);
Route::get('/Galeris/image/{filename}', [GaleriController::class, 'showImage'])->name('Galeris.image');

use App\Http\Controllers\DonorController;

Route::get('/donation-form', [DonorController::class, 'showForm'])->name('donation.form');
Route::post('/donation-form', [DonorController::class, 'submitForm'])->name('donation.submit');
Route::get('/donation-form', function () {
    return view('donation-form');
});