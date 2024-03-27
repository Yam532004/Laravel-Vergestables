<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";

    public function T_food(){
        return $this->hasMany('App\Models\T_food', 'category_id', 'id');
    }
}
