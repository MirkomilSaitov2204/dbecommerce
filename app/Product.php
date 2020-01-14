<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public $table = "products";
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
