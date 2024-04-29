<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index']);
//register
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index']);
