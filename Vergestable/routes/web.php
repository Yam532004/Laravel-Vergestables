<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VergestableController;
use Illuminate\Foundation\Auth\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'home'])->name('homepage');
Route::get('/create', [VergestableController::class, 'create'])->name('createpage');
Route::get('/show/{id}', [VergestableController::class, 'show'])->name('showpage');
Route::post('/destroy', [VergestableController::class, 'destroy'])->name('destroy');
Route::get('/shop', [VergestableController::class, 'shop'])->name('shoppage');
Route::get('/aboutUs', [UserController::class, 'aboutUs'])->name('aboutUs');
Route::get('/cart', [VergestableController::class, 'cart'])->name('cart');
Route::get('/contactUs', [UserController::class, 'contactUs'])->name('contactUs');



