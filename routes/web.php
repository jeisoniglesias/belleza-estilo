<?php

use App\Http\Controllers\Tipos\CategoriaController;
use App\Http\Controllers\Tipos\TiposController;
use App\Livewire\Tipos\CategoriaComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'tipos', 'middleware' => 'auth'], function () {
    Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    Route::post('categorias', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
    Route::delete('categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
    /* 
    Route::get('tipos', [TiposController::class, 'index'])->name('tipos.index');
    Route::get('tipos/create', [TiposController::class, 'create'])->name('tipos.create');
    Route::post('tipos', [TiposController::class, 'store'])->name('tipos.store');
    Route::get('tipos/{tipo}', [TiposController::class, 'show'])->name('tipos.show');
    Route::get('tipos/{tipo}/edit', [TiposController::class, 'edit'])->name('tipos.edit');
    Route::put('tipos/{tipo}', [TiposController::class, 'update'])->name('tipos.update');
    Route::delete('tipos/{tipo}', [TiposController::class, 'destroy'])->name('tipos.destroy'); */
});
Route::get('profile', function () {
    return view('auth.profile');
})->middleware('auth')->name('profile');
