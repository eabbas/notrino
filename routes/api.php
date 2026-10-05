<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cart/store', [CartsController::class, 'store']);
Route::post('/cart/delete', [CartsController::class, 'delete']);
Route::post('/cart/update', [CartsController::class, 'update']);