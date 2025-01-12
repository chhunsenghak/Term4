<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category/list', [CategoryController::class, 'index']);
Route::get('/category/show/{id}', [CategoryController::class, 'show']);
Route::post('/category/create', [CategoryController::class, 'store']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy']);

Route::get('/product/list', [ProductController::class, 'index']);
Route::get('/product/show/{id}', [ProductController::class, 'show']);
Route::post('/product/create', [ProductController::class, 'store']);
Route::put('/product/update/{id}', [ProductController::class, 'update']);
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy']);
