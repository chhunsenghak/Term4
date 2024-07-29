<?php

use App\Models\Post;
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

Route::get("/posts", function () {
    return Post::all();
});

Route::post("/post", function () {
    return Post::create([
        'title' => request('title'),
        'description' => request('description'),
    ]);
});

Route::put("/post/{post}", function (Post $post) {
    $success = $post->update([
        'title' => request('title'),
        'description' => request('description'),
    ]);
    return [
        "success" => $success,
    ];
});


Route::delete("/post/{post}", function (Post $post) {
    $success = $post->delete();
    return [
        "success" => $success,
        "post" => $post
    ];
});
