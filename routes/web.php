<?php

use App\Http\Controllers\Tipos\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categorias', CategoriaController::class)->middleware('auth')->only(['index', 'destroy']);
Route::get('profile', function () {
    return view('auth.profile');
})->middleware('auth')->name('profile');
