<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'hash',
        'name',
        'product_slug',
        'sku',
        'advertiser_id',
        'advertiser_deeplink',
        'frontend_label',
        'short_description',
        'long_description',
        'price',
        'pseudo_price',
        'supplier_id',
        'image_file_name',
        'image_url',
        'availability',
        'shipping_time',
        'shipping_costs',
        'meta_title',
        'meta_description'
    ];
    
    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function attribute(){
        return $this->belongsToMany('App\Attribute');
    }

    public function advertiser(){
        return $this->belongsTo('App\Advertiser');        
    }

    public function supplier(){
        return $this->belongsToMany('App\Supplier');                
    }

}