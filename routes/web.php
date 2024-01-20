<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('auth.dashboard');
})->middleware('auth')->name('home.index');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
