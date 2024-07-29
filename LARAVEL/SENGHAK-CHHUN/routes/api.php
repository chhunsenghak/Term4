<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\BorrowRecordController;

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

// ================ User Routes ==========================
Route::get('/user/list', [UserController::class, 'index']);
Route::get('/user/show/{id}', [UserController::class, 'show']);
Route::post('/user/create', [UserController::class, 'store']);
Route::put("/user/update/{id}", [UserController::class, 'update']);
Route::delete("/user/delete/{id}", [UserController::class, 'destroy']);

// ================ Books Routes ============================
Route::get("/book/list", [BooksController::class, 'index']);
Route::get("/book/show/{id}", [BooksController::class, 'show']);
Route::post("/book/create", [BooksController::class, 'store']);
Route::put("/book/update/{id}", [BooksController::class, 'update']);
Route::delete("/book/delete/{id}", [BooksController::class, 'destroy']);

// ================ Borrow book record =============================
Route::get("/borrow/Record/list", [BorrowRecordController::class, 'index']);
Route::get("/borrow/Record/show/{date}", [BorrowRecordController::class, 'show']);
