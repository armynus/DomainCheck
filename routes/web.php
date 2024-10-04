<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('table', function () {
    return view('pages.table');
})->name('table');

Route::get('form', function () {
    return view('pages.form_elements');
})->name('form');

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('register', function () {
    return view('pages.register');
})->name('register');

Route::get('404', function () {
    return view('pages.errors.error-404');
})->name('404');

Route::get('500', function () {
    return view('pages.errors.error-500');
})->name('500');