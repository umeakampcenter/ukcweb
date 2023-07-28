<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\FrontPage;

class FrontPageRepository extends ModuleRepository
{
    use HandleJsonRepeaters, HandleTranslations;

    protected $jsonRepeaters = [
        'styles',
    ];

    public function __construct(FrontPage $model)
    {
        $this->model = $model;
    }
}
