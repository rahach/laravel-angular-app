<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'frontend_label',
        'category_slug',
        'parent_id',
        'children_count'
    ];

    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function parent(){
            return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }
}