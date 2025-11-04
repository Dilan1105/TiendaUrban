<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;

Route::get('/', function () {
    // Pasar los productos a la vista principal
    $products = Product::orderBy('id', 'desc')->get();
    return view('welcome', compact('products'));
});

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

// Rutas de autenticación simples (MVC)
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
