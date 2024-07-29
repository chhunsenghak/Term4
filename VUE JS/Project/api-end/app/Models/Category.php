<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }

    public static function list()
    {
        return self::all();
    }

    public static function store($request, $id = null){
        $data = $request->only('name', 'description');
        $data = self::updateOrCreate(['id' => $id], $data);
        return $data;
    }
}
