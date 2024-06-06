<?php

use App\Http\Controllers\Productos\ProductoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tipos\CategoriaController;
use App\Http\Controllers\Tipos\PublicTargetController;
use App\Http\Controllers\Tipos\SubCategoriaController;

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

    Route::get('sub/categorias', [SubCategoriaController::class, 'index'])->name('sub.categorias.index');
    Route::get('sub/categorias/create', [SubCategoriaController::class, 'create'])->name('sub.categorias.create');
    Route::post('sub/categorias', [SubCategoriaController::class, 'store'])->name('sub.categorias.store');
    Route::get('sub/categorias/{subCategoria}/edit', [SubCategoriaController::class, 'edit'])->name('sub.categorias.edit');
    Route::put('sub/categorias/{subCategoria}', [SubCategoriaController::class, 'update'])->name('sub.categorias.update');
    Route::delete('sub/categorias/{subCategoria}', [SubCategoriaController::class, 'destroy'])->name('sub.categorias.destroy');

    Route::get('targets', [PublicTargetController::class, 'index'])->name('targets.index');
    Route::post('targets', [PublicTargetController::class, 'store'])->name('targets.store');
    Route::get('targets/{target}/edit', [PublicTargetController::class, 'edit'])->name('targets.edit');
    Route::put('targets/{target}', [PublicTargetController::class, 'update'])->name('targets.update');
    Route::delete('targets/{target}', [PublicTargetController::class, 'destroy'])->name('targets.destroy');
});
Route::group(['prefix' => 'bodega', 'middleware' => 'auth'], function () {
    Route::get('productos/', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('productos/', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
});
Route::get('profile', function () {
    return view('auth.profile');
})->middleware('auth')->name('profile');
