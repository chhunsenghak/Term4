<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $array = [
            [
                'name' => 'admin',
                'email' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user',
            ],
            [
                'name' => 'user2',
                'email' => 'user2',
            ],
            [
                'name' => 'user3',
                'email' => 'user3',
            ],
            [
                'name' => 'user4',
                'email' => 'user4',
            ],
            [
                'name' => 'user5',
                'email' => 'user5',
            ],
            [
                'name' => 'user6',
                'email' => 'user6',
            ],
            [
                'name' => 'user7',
                'email' => 'user7',
            ],
            [
                'name' => 'user8',
                'email' => 'user8',
            ],
            [
                'name' => 'user9',
                'email' => 'user9',
            ],
            [
                'name' => 'user10',
                'email' => 'user10',
            ],
        ];
        foreach ($array as $item) {
            User::create($item);
        }
    }
}
