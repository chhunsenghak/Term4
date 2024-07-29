<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(["data" => Post::all(), "status" => 200, "message" => "Request is been successfully processed"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts', 'max:255'],
            'body' => ['required'],
        ]);
        // $post = Post::create($validatedData);
        $title = $request->title;
        $body = $request->body;
        $id = $request->user_id;
        $post = new Post();
        try {
            $data =  $post->createPost($id, $title, $body);
            return response()->json(["data" => $data, "message" => "Create successfully"], status: 200);
        } catch (Exception $error) {
            return response()->json(["data" => "", "message" => "Cannot create data", "error" => $error], status: 404,);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $data = Post::find($post);
        return ["data" => $data];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $id = $post->id;
        $title = $request->title;
        $body = $request->body;

        try {
            $data = $post->updatePost($id, $title, $body);
            return response()->json(["data" => $data, "message" => "already update"], status: 200);
        } catch (Exception $error) {
            return response()->json(["data" => "", "message" => "Cannot create data", "error" => $error], status: 404,);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $id = $post->id;
        try {
            // Post::destroy($id);
            $post->deletePost($id);
            return response()->json(["data" => $post, "message" => "Post have been deleted"], status: 200);
        } catch (Exception $error) {
            return response()->json(["data" => "", "message" => "Cannot deleted post", "error" => $error], status: 404,);
        }
    }
}
