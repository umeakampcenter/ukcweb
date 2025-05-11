<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Board extends Model 
{
    use HasTranslation;

    protected $fillable = [
        'title',
        'text',
    ];
    
    public $translatedAttributes = [
        'title',
        'text'
    ];
}
