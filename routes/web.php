<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('Client.welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard.index');
});

Route::resource('categories', CategoryController::class);
Route::resource('dishes', DishController::class);
Route::resource('clients', ClientController::class);
Route::resource('orders', OrderController::class);
Route::resource('kitchen', KitchenController::class);

Route::get('/logout', function () {
	return 'logged out';
});