<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Post $post)
    {
        //
        $success = $post->create([
            "title" => request("title"),
            "description" => request("description")
        ]);
        return [
            "success" => $success,
            "message" => $success ? "Post created successfully" : "Post creation failed",
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return $post = Post::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        //
        $post->update([
            "title" => request("title"),
            "description" => request("description")
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
    }
}
