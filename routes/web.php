<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
  return view('auth.login');
});
Route::get('libros/pdf', [LibroController::class, 'pdf'])->name('libros.pdf');

Route::resource('libros', LibroController::class)->middleware('auth');
Route::resource('categorias', CategoriaController::class)->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [LibroController::class, 'index'])->name('libros');
});
