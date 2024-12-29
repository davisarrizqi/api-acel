<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// get protocol
Route::get('/', [UserController::class, 'indexPage']);
Route::get('/login', [UserController::class, 'geHandler'])->name('login');
Route::get('/register', [UserController::class, 'getHandler'])->name('register');

// post protocol
Route::post('/login', [UserController::class, 'loginHandler'])->name('login');
Route::post('/register', [UserController::class, 'registerHandler'])->name('register');