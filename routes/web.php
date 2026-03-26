<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/products', [ProductController::class, 'index'])
  ->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])
  ->name('products.show');
