<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/adopt', function () {
    return view('adopt');
});

Route::get('/adoptionprocess', function () {
    return view('adoptionprocess');
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
