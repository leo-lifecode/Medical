<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\authenticateController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $doctors = Doctor::all();
    return view('index', ['doctors' => $doctors]);
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');
Route::post('/signin', [authenticateController::class, 'login'])->middleware('guest');
Route::post('/signup', [authenticateController::class, 'register'])->middleware('guest');
Route::post('/logout', [authenticateController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('appointment', function () {
    return view('appointment', ['appointments' => Appointment::all()]);
})->name('appointment');
Route::post('/appointment', [AppointController::class, 'store'])->middleware('auth');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/appointment', AppointController::class)->except(['create', 'store', 'show', 'edit']);
    Route::resource('/doctor', DoctorController::class);
    Route::resource('/speciality', SpecialityController::class);
    Route::resource('/user', UserController::class)->except(['show']);
    Route::resource('/patient', PatientController::class);
});
