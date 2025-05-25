<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Schedule;

class ScheduleRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(Schedule $model)
    {
        $this->model = $model;
    }

    public function order(Builder $builder, array $orders = []): Builder {
        $builder
            ->orderBy('day', 'asc')
            ->orderBy('start', 'asc');

        return parent::order($builder, $orders);
    }
}
