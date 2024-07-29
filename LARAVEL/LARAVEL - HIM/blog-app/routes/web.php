<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return "All Products";
    });
    Route::get('create', function () {
        return "Create Product";
    });
});

Route::get('request/{title}', function () {
    $title = request('title');
    return "Request for ". $title;
})->where('title', '[A-Za-z]+');

Route::get('request/{id}', function () {
    $id = request('id');
    return "Request for ". $id;
})->where('id', '[0-9]+');


// MISSION ONE
Route::get("/users", function () {
    global $users;
    $list = 'The users are ';
    foreach ($users as $user) {
        $list .= $user['name'] . ', ';
    }
    return $list;
});
