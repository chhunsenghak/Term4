<?php

namespace Database\Seeders;

use App\Models\BorrowRecords;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $array = [
            [
                'user_id' => 1,
                'book_id' => 1,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01'
            ],
            [
                'user_id' => 2,
                'book_id' => 2,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 3,
                'book_id' => 3,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 4,
                'book_id' => 4,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 5,
                'book_id' => 5,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 6,
                'book_id' => 6,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ], [
                'user_id' => 7,
                'book_id' => 7,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 8,
                'book_id' => 8,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ],
            [
                'user_id' => 9,
                'book_id' => 9,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ], [
                'user_id' => 10,
                'book_id' => 10,
                'borrow_date' => '2021-01-01',
                'return_date' => '2021-02-01',
            ]

        ];
        foreach($array as $item){
            BorrowRecords::create($item);
        }
    }
}
