<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VergestableController;
use Illuminate\Foundation\Auth\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'home'])->name('homepage');
Route::get('/show/{id}', [VergestableController::class, 'show'])->name('showpage');
Route::get('/destroy/{id}', [VergestableController::class, 'destroy'])->name('destroy');
Route::get('/shop', [VergestableController::class, 'shop'])->name('shoppage');
Route::get('/cart', [VergestableController::class, 'cart'])->name('cart');
Route::get('/create', [VergestableController::class, 'create'])->name('createpage');
Route::post('/create', [VergestableController::class, 'add'])->name('create-product');
Route::get('/edit/{id}', [VergestableController::class, 'edit'])->name('editpage');
Route::post('/update/{id}', [VergestableController::class, 'update'])->name('update');
Route::get('/cart/{category_id}', [VergestableController::class, 'cartByCategoryId'])->name('food-category');








