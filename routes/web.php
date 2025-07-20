<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/demo', function () {
    return view('demo');
})->name('demo');

Route::get('/pro', function () {
    return view('pro');
})->name('pro');
