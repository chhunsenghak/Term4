<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\models\post;
use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts', [PostController::class, "index"]);

Route::post("/post", function (post $post) {
    return $post->create([
        'title' => request('title'),
        'description' => request('description'),
    ]);
});

Route::put("/post/{post}", function(Post $post){
    $success = $post->update([
        'title' => request('title'),
        'description' => request('description'),
    ]);
    return [
        "success" => $success,
    ];
});

Route::delete("/post/{post}", function(Post $post){
    $success = $post->delete();
    return [
        "success" => $success,
    ];
});