<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/login', [AuthController::class, 'loginPage']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/login', [AuthController::class, 'loginApi']);
Route::post('/logout', [AuthController::class, 'logout']);



Route::get('dashboard', function () {
	return Inertia::render('dashboard');
});

Route::get('categories', function () {
	return Inertia::render('categories');
});
