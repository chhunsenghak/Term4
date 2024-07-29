<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $array = [
            ['name' => 'John', 'description' => 'John Doe description'],
            ['name' => 'Lala', 'description' => 'LaLa description'],
            ['name' => 'chanthou', 'description' => 'chandy Doe description'],
            ['name' => 'chandy', 'description' => 'chanthou Doe description'],
            ['name' => 'soching', 'description' => 'soching Doe description'],
        ];
        foreach ($array as $item){
            Category::create($item);
        }
    }
}
