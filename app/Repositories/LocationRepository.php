<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Location;

class LocationRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Location $model)
    {
        $this->model = $model;
    }
}
