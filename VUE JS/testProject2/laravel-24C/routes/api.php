<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DiscountController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\API\StudentController;
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
/**
 * @OA\Student(
 *     path="/api/student/create",
 *     summary="Authenticate user and generate JWT token",
 *     @OA\Parameter(
 *         name="title",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="description",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(response="200", description="Login successful"),
 *     @OA\Response(response="401", description="Invalid credentials")
 * )
 */
Route::get('/student/list', [StudentController::class, 'index'])->name('student.list');
Route::post('/student/create', [StudentController::class, 'store'])->name('student.create');
Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('student.show');
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

/**
 * @OA\Category(
 *     path="/api/category/create",
 *     summary="Authenticate user and generate JWT token",
 *     @OA\Parameter(
 *         name="title",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="description",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(response="200", description="Login successful"),
 *     @OA\Response(response="401", description="Invalid credentials")
 * )
 */
Route::get('/category/list', [CategoryController::class, 'index'])->name('category.list');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

/**
 * @OA\Product(
 *     path="/api/student/create",
 *     summary="Authenticate user and generate JWT token",
 *     @OA\Parameter(
 *         name="title",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="description",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(response="200", description="Login successful"),
 *     @OA\Response(response="401", description="Invalid credentials")
 * )
 */
Route::get('/product/list', [ProductController::class, 'index'])->name('product.list');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.create');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
/**
 * @OA\Discount(
 *     path="/api/student/create",
 *     summary="Authenticate user and generate JWT token",
 *     @OA\Parameter(
 *         name="title",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="description",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(response="200", description="Login successful"),
 *     @OA\Response(response="401", description="Invalid credentials")
 * )
 */
Route::get('/discount/list', [DiscountController::class, 'index'])->name('discount.list');
Route::post('/discount/create', [DiscountController::class, 'store'])->name('discount.create');
Route::get('/discount/show/{id}', [DiscountController::class, 'show'])->name('discount.show');
Route::put('/discount/update/{id}', [DiscountController::class, 'update'])->name('discount.update');
Route::delete('/discount/delete/{id}', [DiscountController::class, 'destroy'])->name('discount.destroy');

/**
 * @OA\Order(
 *     path="/api/student/create",
 *     summary="Authenticate user and generate JWT token",
 *     @OA\Parameter(
 *         name="title",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="description",
 *         in="query",
 *         description="User's name",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(response="200", description="Login successful"),
 *     @OA\Response(response="401", description="Invalid credentials")
 * )
 */
Route::get('/order/list', [OrderController::class, 'index'])->name('order.list');
Route::post('/order/create', [OrderController::class, 'store'])->name('order.create');
Route::get('/order/show/{id}', [OrderController::class, 'show'])->name('order.show');
Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
