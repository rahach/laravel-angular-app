<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvDownload extends Model
{
    protected $fillable = [    
        'network_id',
        'advertiser_id',        
        'checksum'
    ];    
}
