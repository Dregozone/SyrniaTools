<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [PagesController::class, 'home'])
    ->name('home');

Route::get('/tools', [PagesController::class, 'tools'])
    ->name('tools');

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');
Route::post('/login', [AuthController::class, 'loggingIn']);

Route::get('/register', [AuthController::class, 'register'])
    ->name('register');
Route::post('/register', [AuthController::class, 'registerNewUser']);

// Default
Route::get('/', [PagesController::class, 'home']);
