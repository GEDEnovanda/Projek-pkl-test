<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backoffice', function () {
    return view('backoffice');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/Users',[UserController::class,'loadAllUsers']);
Route::get('/backoffice', [UserController::class, 'loadAllbackoffice']);
Route::get('/add/user',[UserController::class,'loadaddUserForm']);
Route::post('/add-user', [UserController::class, 'store'])->name('AddUser');
