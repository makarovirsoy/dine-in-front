<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/login', [AuthController::class, 'loginPage']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/login', [AuthController::class, 'loginApi']);


Route::get('dashboard', function () {
	return Inertia::render('Admin/dashboard');
});

Route::get('categories', function () {
	return Inertia::render('categories');
});


Route::get('/dashboard1', function () {
	return view('dashboard.index');
});

Route::get('/client', function () {
	return view('Client.welcome');
});


Route::resource('categories', CategoryController::class);
Route::resource('dishes', DishController::class);
Route::resource('clients', ClientController::class);
Route::resource('orders', OrderController::class);

Route::resource('categories1', CategoryController::class);
Route::resource('dishes1', DishController::class);
Route::resource('clients1', ClientController::class);
Route::resource('orders1', OrderController::class);
Route::resource('kitchen1', KitchenController::class);

Route::get('test', function () {
	return Inertia::render('Admin/layout');
});