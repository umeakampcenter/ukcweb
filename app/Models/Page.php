<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Page extends Model 
{
    use HasBlocks, HasTranslation, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'linkPath',
    ];
    
    public $translatedAttributes = [
        'title',
        'active',
    ];
    
}
