<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Section extends Model implements Sortable
{
    use HasTranslation, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'text',
        'position',
        'style_page_id'
    ];
    
    public $translatedAttributes = [
        'title',
        'text'
    ];
}
