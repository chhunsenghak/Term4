<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $array = [
            ['name' => 'Product 1', 'description' => 'Product 1 description', 'price' => 100, 'category_id' => 1],
            ['name' => 'Product 2', 'description' => 'Product 2 description', 'price' => 200, 'category_id' => 1],
            ['name' => 'Product 3', 'description' => 'Product 3 description', 'price' => 300, 'category_id' => 1]
        ];
        foreach ($array as $item) {
            Products::create($item);
        };
    }
}
