<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/blog', [BlogController::class, 'index']);
