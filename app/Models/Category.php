<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    function articleCount(){
        return $this->hasMany('app\Models\Article','category_id','id');
     }
}
