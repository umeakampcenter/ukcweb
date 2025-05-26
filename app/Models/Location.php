<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Location extends Model 
{
    use HasTranslation;

   protected $fillable = [
        'title',
        'text',
        'googleMaps',
        'streetView'
    ];
    
    public $translatedAttributes = [
        'title',
        'text'
    ];
}
