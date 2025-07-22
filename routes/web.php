<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;



Route::get("/", [HomeController::class, 'index']);

route::get('/product', [ProductController::class, 'list']);

route::get('/product/{id}',  [ProductController::class, 'details']);

Route::get("/cart", [CartController::class, 'index']);
