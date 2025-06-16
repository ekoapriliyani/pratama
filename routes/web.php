<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Halaman utama
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/blog', function () {
    return view('blog');
});
