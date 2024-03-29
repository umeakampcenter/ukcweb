<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Schedule;

class ScheduleRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Schedule $model)
    {
        $this->model = $model;
    }
}
