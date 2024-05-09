<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categorias =['all','categoria1','categoria2','categoria3','categoria4','categoria5'];
$name="sele";

    //return view('welcome',['categorias'=>$categorias]);
    return view('welcome',compact('categorias','name'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
