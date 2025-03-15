<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
    #return 'About Page';
    #return ['foo' => 'bar'];
});

Route::get('/contact', function () {
    return view('contact');
});
