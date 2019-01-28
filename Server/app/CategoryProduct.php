<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{


    public function category(){
        return $this->belongsToMany('App\Category');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }

}
