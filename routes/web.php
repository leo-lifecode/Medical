<?php

use App\Http\Controllers\authenticateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');

Route::post('/signin', [authenticateController::class, 'login'])->middleware('guest');
Route::post('/signup', [authenticateController::class, 'register'])->middleware('guest');
Route::post('/logout', [authenticateController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');