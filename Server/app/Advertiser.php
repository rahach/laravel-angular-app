<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $fillable = [    
        'name',
        'frontend_label',
        'advertiser_slug',
        'network',
        'download_url',
        'is_active',
        'checksum',
        'path',
        'filename'
    ];    

    public function product(){
        return $this->hasMany('App\Product');
    }

}