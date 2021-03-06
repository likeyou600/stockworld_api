<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StockController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//php artisan route:list 查看可用
//php artisan l5-swagger:generate


Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::prefix('stock')->group(function () {

    Route::get('update_stock_category', [StockController::class, 'update_stock_category']);
    Route::get('update_stock_name', [StockController::class, 'update_stock_name']);
    Route::get('update_stock_data', [StockController::class, 'update_stock_data']);

    Route::get('get_stock_category', [StockController::class, 'get_stock_category']);
    Route::get('get_stock_name', [StockController::class, 'get_stock_name']);

    Route::post('cal_stock', [StockController::class, 'cal_stock']);
});

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'userInfo']);
});
