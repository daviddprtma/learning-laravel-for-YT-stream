<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    public $table = 'medicines';

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
