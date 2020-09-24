<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'name', 'description', 'parent_id'];

    public function subCategories(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');    
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
