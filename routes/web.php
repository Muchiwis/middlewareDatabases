<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticar;

// Route::get('/', [ProductController::class, 'index'])->name('product.index');

// Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
// Route::get('/profile/main',[ProfileController::class, 'main'])->name('profile.main');
// Route::get('/profile/main/destroy',[ProfileController::class, 'destroy'])->name('profile.destroy');
// Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');


Route::get('/autenticar/login',[UserController::class, 'login'])->name('autenticar.login');
Route::get('/autenticar/destroy',[UserController::class, 'destroySession'])->name('autenticar.destroy');
Route::get('/autenticar/home',[UserController::class, 'home'])->name('autenticar.home')->middleware(Autenticar::class);