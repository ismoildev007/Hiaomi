<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'name_uz',
        'name_ru',
        'name_en',
        'description_uz',
        'description_ru',
        'description_en',
        'gift_name',
        'gift_image'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
