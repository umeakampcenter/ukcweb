<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Schedule extends Model
{
    use HasTranslation;

    protected $fillable = [
        'title',
        'day',
        'start',
        'end',
        'typeOfClass'
    ];

    public $translatedAttributes = [
        'title'
    ];
}
