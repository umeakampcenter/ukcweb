<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class FrontPage extends Model 
{
    use HasBlocks, HasTranslation;

    protected $fillable = [
        'intro',
        'styles'
    ];
    
    public $translatedAttributes = [
        'intro',
    ];
    
    protected $casts = [
        'styles' => 'array'
    ];
}
