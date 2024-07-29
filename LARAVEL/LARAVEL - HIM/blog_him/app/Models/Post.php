<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function createPost($id, $title, $body)
    {
        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->user_id = $id;
        try {
            $post->save();
            return $post;
        } catch (Exception $error) {
            return $error;
        }
    }

    public function updatePost($id, $title, $body)
    {
        $post = Post::find($id);
        $post->title = $title;
        $post->body = $body;
        try {
            $post->save();
            return $post;
        } catch (Exception $error) {
            return $error;
        }
    }
    public function deletePost($id)
    {
        $post = Post::find($id);
        try {
            $post->delete();
            return $post;
        } catch (Exception $error) {
            return $error;
        }
    }
}
