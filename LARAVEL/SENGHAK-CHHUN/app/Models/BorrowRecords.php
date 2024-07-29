<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRecords extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsToMany(User::class);
    }
    public function Books()
    {
        return $this->belongsToMany(Books::class);
    }

    public static function list()
    {
        return BorrowRecords::all();
    }
    public static function findDate($borrow_date)
    {
        $data = self::list();
        foreach ($data as $item) {
            if ($item->borrow_date == $borrow_date) {
                return $item;
            }
        }
    }
}
