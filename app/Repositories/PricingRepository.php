<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Pricing;

class PricingRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleMedias;

    public function __construct(Pricing $model)
    {
        $this->model = $model;
    }
}
