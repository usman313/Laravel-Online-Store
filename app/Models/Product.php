<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function image(){
        return $this->hasOne(Image::class, 'parent_id', 'id')->where('type','product');
    }
    public function fabric(){
        return $this->hasOne(FabricType::class, 'fabric_id', 'id');
    }
}
