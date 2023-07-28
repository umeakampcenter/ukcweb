<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\FrontPage;

class FrontPageRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations;

    public function __construct(FrontPage $model)
    {
        $this->model = $model;
    }
}
