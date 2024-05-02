<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
//register
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');
// register post
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
