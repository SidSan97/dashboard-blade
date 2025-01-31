<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/campaigns', function () {
    return view('home');
})->name('campaigns');