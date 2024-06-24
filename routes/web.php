<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dishes.index');
});

Route::resource('dishes', DishController::class);
Route::put('carts', [CartController::class, 'update'])->name('carts.update');
