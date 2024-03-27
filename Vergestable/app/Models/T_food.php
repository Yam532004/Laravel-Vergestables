<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T_food extends Model
{
    use HasFactory;
    protected $table = "T_food";

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function getAllFoods($keyword = null){
        $T_food = DB::table($this->table);
        if (!empty($keyword)){
            $T_food = $T_food->where(function ($query) use ($keyword){
                $query ->orwhere ('name', 'like', '%'.$keyword. '%');
                $query ->orwhere ('describles', 'like', '%'.$keyword. '%');
            });
        }
        return $T_food;
    }
}
