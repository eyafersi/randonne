<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id'
    ];

    // Define the relationship between Product and Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
