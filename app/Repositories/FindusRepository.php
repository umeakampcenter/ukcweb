<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Findus;

class FindusRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Findus $model)
    {
        $this->model = $model;
    }
}
