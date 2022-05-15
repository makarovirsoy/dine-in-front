<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'loginApi']);

Route::get('/dashboard', [DashboardController::class, '__invoke']);

Route::resource('categories', CategoryController::class);
Route::resource('dishes', DishController::class);
Route::resource('clients', ClientController::class);
Route::resource('orders', OrderController::class);

Route::get('categories1', function () {
	return view('dashboard.Categories.index');
});

Route::get('dishes1', function () {
	return view('dashboard.Dishes.index');
});

Route::get('clients1', function () {
	return view('dashboard.Clients.index');
});

Route::get('orders1', function () {
	return view('dashboard.Orders.index');
});

Route::get('kitchen1', function () {
	return view('dashboard.index');
});

Route::get('test', function () {
	return Inertia::render('Admin/Categories/create');
});

Route::get('/', function () {
	return Inertia::render('Client/home');
});
