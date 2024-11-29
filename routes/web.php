<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');
Route::view('/user', 'user.dashboard')->name('user.dashboard');
Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
