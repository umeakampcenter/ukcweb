<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Pricing;

class PricingTranslation extends Model
{
    protected $baseModuleModel = Pricing::class;
}
