<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backoffice', function () {
    return view('backoffice');
});
Route::get('/Users',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadaddUserForm']);
Route::post('/add-user', [UserController::class, 'store'])->name('AddUser');