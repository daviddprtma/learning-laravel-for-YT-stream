<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table ='categories';

    public function products(){
        return $this->hasMany('App\Models\Product','category_id','id');
    }

    public function medicines(){
        return $this->hasMany('App\Models\Medicine','category_id','id');
    }
}
