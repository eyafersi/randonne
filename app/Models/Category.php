<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    // Define the relationship between Category and Products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
