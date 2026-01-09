<?php

use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout.master');
});