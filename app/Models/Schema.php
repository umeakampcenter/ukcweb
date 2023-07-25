<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Schema extends Model
{
    use HasTranslation;

    protected $fillable = [
        'title',
        'start',
        'end',
        'typeOfClass'
    ];

    public $translatedAttributes = [
        'title'
    ];
}
