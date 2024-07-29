<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function list()
    {
        return Products::all();
    }

    public static function store($request, $id = null)
    {
        $data = $request->only('name', 'category_id', 'description', 'price');
        $data = self::updateOrCreate(['id' => $id], $data);
        return $data;
    }
}
