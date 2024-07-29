<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $array = [
            [
                'title' => 'Book 1',
                'author' => 'Author 1',
                'genre' => 'Genre 1',
                'published_year' => '2005'
            ],
            [
                'title' => 'Book 2',
                'author' => 'Author 2',
                'genre' => 'Genre 2',
                'published_year' => '2000'
            ],
            [
                'title' => 'Book 3',
                'author' => 'Author 3',
                'genre' => 'Genre 3',
                'published_year' => '2001'
            ],
            [
                'title' => 'Book 4',
                'author' => 'Author 4',
                'genre' => 'Genre 4',
                'published_year' => '2023'
            ],
            [
                'title' => 'Book 5',
                'author' => 'Author 5',
                'genre' => 'Genre 5',
                'published_year' => '2002'
            ],
            [
                'title' => 'Book 6',
                'author' => 'Author 6',
                'genre' => 'Genre 6',
                'published_year' => '2003'
            ],
            [
                'title' => 'Book 7',
                'author' => 'Author 7',
                'genre' => 'Genre 7',
                'published_year' => '2004'
            ],
            [
                'title' => 'Book 8',
                'author' => 'Author 8',
                'genre' => 'Genre 8',
                'published_year' => '2005'
            ],
            [
                'title' => 'Book 9',
                'author' => 'Author 9',
                'genre' => 'Genre 9',
                'published_year' => '2006'
            ],
            [
                'title' => 'Book 10',
                'author' => 'Author 10',
                'genre' => 'Genre 10',
                'published_year' => '2007'
            ]
        ];
        foreach($array as $item){
            Books::create($item);
        };
    }
}
