<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthentificationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthentificationController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthentificationController::class, 'logout'])->name('logout');
Route::get('/register', [AuthentificationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthentificationController::class, 'register'])->name('register.post');
