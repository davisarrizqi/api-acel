<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalonController;

// get protocol
Route::get('/', [UserController::class, 'indexPage']);
Route::get('/login', [UserController::class, 'geHandler'])->name('login');
Route::get('/register', [UserController::class, 'getHandler'])->name('register');
Route::get('/get-treatment', [SalonController::class, 'getTreatment']);
Route::get('/get-salon', [SalonController::class, 'getSalons']);


// post protocol
Route::post('/login', [UserController::class, 'loginHandler'])->name('login');
Route::post('/register', [UserController::class, 'registerHandler'])->name('register');
Route::post('/update-profile', [UserController::class, 'updateProfile']);
Route::post('/create-booking', [SalonController::class, 'createBooking']);
Route::post('/get-booking', [SalonController::class, 'getBooking']);