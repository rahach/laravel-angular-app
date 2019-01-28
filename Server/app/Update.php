<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $fillable = [    
        'network_id',
        'advertiser_id',        
        'checksum'
    ];    
}
