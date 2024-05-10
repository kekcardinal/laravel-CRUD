<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController ;
use App\Http\Controllers\LocalizationController ;
use App\Http\Controllers\ArticleController;

Route::get('/', [ProductController::class, 'home'])->name('product.home');

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

Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');


Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/articles/{article}/destroy',[ArticleController::class, 'destroy'])->name('article.destroy');