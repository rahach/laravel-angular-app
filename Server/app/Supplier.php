<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [    
        'name',
        'frontend_label',
        'supplier_slug',
        'deeplink'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }        

}
