<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index']);

// Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/profile/identity', [ProfileController::class, 'identity']);
// Route::get('/profile/family', [ProfileController::class, 'family']);
