<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/biocor', function () {
    return view('Biocor.home');
});

Route::get('/laura', function () {
    return view('Laura.home');
});
