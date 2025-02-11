<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    #return 'About Page';
    #return ['foo' => 'bar'];
});
