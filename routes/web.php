<?php

use App\Http\Controllers\Tipos\TiposController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Route::resource('tipos/categorias', TiposController::class)->middleware('auth')->only(['index', 'destroy']);
#Route::controller('tipos/categorias', TiposController::class)->middleware('auth')->except(['index', 'destroy']);
Route::controller(TiposController::class)->middleware('auth')->group(function () {
    Route::get('tipos/categorias', 'indexCategorias')->name('categorias.index');
    Route::get('tipos/sub/categorias', 'indexSubCategorias')->name('subcategorias.index');
    Route::delete('tipos/categorias/{categoria}', 'destroy')->name('categorias.destroy');
    Route::delete('tipos/sub/categorias/{sub}', 'destroySubcategoria')->name('subcategorias.destroy');
});

Route::get('profile', function () {
    return view('auth.profile');
})->middleware('auth')->name('profile');
