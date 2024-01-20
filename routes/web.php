<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
  return view('auth.dashboard');
})->middleware('auth')->name('home.index');


Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
