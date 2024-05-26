<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class StylePage extends Model 
{
    use HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'linkPath'
    ];
    
    public $translatedAttributes = [
        'title',
        'active',
    ];
    
}
