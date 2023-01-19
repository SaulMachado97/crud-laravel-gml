<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);

Route::resource('usuarios', \App\Http\Controllers\UsuarioController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
