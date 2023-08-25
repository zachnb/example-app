<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\EnglishLevelController;

Route::get('/', function () {
    return view('home');
});

// About page route
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Sign up and login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']); 
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup', [SignUpController::class, 'store']);

// English level routes / routes that require authentication 
Route::middleware(['auth'])->group(function () {
Route::get('/home', [EnglishLevelController::class, 'index'])->name('home');
Route::get('/beginner', [EnglishLevelController::class, 'beginner'])->name('beginner');
Route::get('/intermediate', [EnglishLevelController::class, 'intermediate'])->name('intermediate');
Route::get('/advanced', [EnglishLevelController::class, 'advanced'])->name('advanced');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});