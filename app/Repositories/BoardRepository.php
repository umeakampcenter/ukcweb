<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Board;

class BoardRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Board $model)
    {
        $this->model = $model;
    }
}
