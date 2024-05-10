<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categorias =['Todo','Mujer','Hombre','Niños','Niñas','Ofertas'];

    return view('welcome',['categorias'=>$categorias]);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
