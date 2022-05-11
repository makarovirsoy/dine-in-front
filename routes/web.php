<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\LoggedInMiddleware;
use App\Models\User;
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

Route::get('/dashboard', [AuthController::class, 'loginPage']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/dashboard', [AuthController::class, 'loginApi']);
Route::post('/logout', [AuthController::class, 'logout']);

