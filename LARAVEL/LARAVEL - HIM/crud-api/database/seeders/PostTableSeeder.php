<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            ["title" => "Khmer new year", "description" => "Hello World"],
            ["title" => "Cambodia", "description" => "description 20"]
        ];
        foreach($posts as $post){
            Post::create($post);
        };
    }
}
