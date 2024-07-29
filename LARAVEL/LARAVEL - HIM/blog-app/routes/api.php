<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\Readline\Hoa\Console;

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

Route::get("/", function(){
    global $users;
    return $users;
});

Route::get("/post", function(){
    return [
        "Hello", 
        "World",
    ];
});

// MISSION TWO
Route::get("/users", function(){
    global $users;
    return $users;
});

// MISSION FIVE
route::prefix('user')->group(function(){
    route::get('/{name}', function(){
        global $users;
        $name = Route::current()->parameter('name');
        foreach ($users as $user){
            if ($user["name"] == $name){
                return $user;
            }
        }
        return "Cannot get a user like this! ";
    });
});

// MISSION SIX
route::prefix('user')->group(function(){
    route::get('/{id}/post/{post_id}', function(){
        global $users;
        $id = Route::current()->parameter('id');
        $post_id = Route::current()->parameter('post_id');
        if ($id < count($users)){
            if ($post_id < count($users[$id]['posts'])){
                return $users[$id]['posts'][$post_id];
            }else{
                return "Cannot find the post with id ". $post_id . "for the user " . $id;
            }
        }
        
    });
});

// MISSION THREE
// Route::get("/user/{id}", function(){
//     global $users;
//     $id = Route::current()->parameter('id');
//     if ($id < count($users)){
//         return $users[$id];
//     }else{
//         return "Cannot find the user with index " . $id;
//     }
// });

// MISSION FOUR
// Route::get("/user/{name}", function(){
//     global $users;
//     $name = Route::current()->parameter('name');
//     foreach ($users as $user){
//         if ($user["name"] == $name){
//             return $user;
//         }
//     }
//     return "Cannot find the user name  ". $name;
// });

Route::fallback(function(){
    return "Page not found (404)";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
