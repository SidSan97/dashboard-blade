<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/campaigns', function () {
    return view('home');
})->name('campaigns');

Route::get('/edit-campaign', function () {
    return view('home');
})->name('edit-campaign');

Route::get('/task-queue', function () {
    return view('home');
})->name('task-queue');
