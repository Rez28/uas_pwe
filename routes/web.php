<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
