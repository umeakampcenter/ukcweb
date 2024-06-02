<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class)->orderBy('position');
    }
    
}
