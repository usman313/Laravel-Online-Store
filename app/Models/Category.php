<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function image(){
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('type','category');
    }

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id')->where('block_status', 'active');
    }
}
