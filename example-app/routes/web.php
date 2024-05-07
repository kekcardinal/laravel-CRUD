<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product',[ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{product}/destroy',[ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authentication'])->name('login.authentication');
Route::get('/registration', [CustomAuthController::class, 'create'])->name('user.registration');
Route::post('/registration-store', [CustomAuthController::class, 'store'])->name('user.store');

Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
