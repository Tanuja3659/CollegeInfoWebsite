<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/contact', function () {
    return view('contact');
});