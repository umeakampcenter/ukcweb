<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Schema;

class SchemaRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Schema $model)
    {
        $this->model = $model;
    }
}
