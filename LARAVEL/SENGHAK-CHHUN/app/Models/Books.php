<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'published_year', 'genre'];

    public function BorrowRecords(){
        return $this->hasMany(BorrowRecords::class);
    }
    public static function list()
    {
        return Books::all();
    }

    public static function store($request, $id = null)
    {
        $data = $request->only("title", 'author', 'genre', 'published_year');
        $data = self::updateOrCreate(["id" => $id], $data);
        return $data;
    }
}
