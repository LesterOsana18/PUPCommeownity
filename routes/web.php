<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Registration Routes
// This route shows the registration form.
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Authentication Routes
// This route shows the login form.
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route
// This route is protected by the 'auth' middleware, meaning only authenticated users can access it.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Website Routes
// These routes are for the public-facing pages of the website.
Route::get('/', function () {
    return view('home');
});

Route::get('/adopt', function () {
    return view('adopt');
});

Route::get('/adoptionprocess', function () {
    return view('adoptionprocess');
});

Route::get('/application', function () {
    return view('application');
});

Route::get('/catprofile', function () {
    return view('catprofile');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/donation-form', function () {
    return view('donation-form');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/terms', function () {
    return view('terms');
});
