<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price', 'quantity'];
    public function categories(){
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
