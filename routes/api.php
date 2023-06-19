<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:api')->group(function () {
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/users', UserController::class);
    Route::apiResource('/products', ProductController::class);
    
    Route::get('/products-by-category/{category}', [ProductController::class, 'getByCategory']);
});

Route::post('/login', [AuthenticateController::class, 'login']);
Route::post('/register', [AuthenticateController::class, 'register']);