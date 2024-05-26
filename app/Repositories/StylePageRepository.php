<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\StylePage;

class StylePageRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(StylePage $model)
    {
        $this->model = $model;
    }
}
