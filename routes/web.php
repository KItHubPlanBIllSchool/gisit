<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\GoogleAuthController;
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::post('/register', [AuthManager::class, 'registrationpost'])->name('registration.post');
Route::get('/register', [AuthManager::class, 'registration'])->name('register');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
