<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas CRUD para camisetas (products)
Route::resource('products', ProductController::class);
