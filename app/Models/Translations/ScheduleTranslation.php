<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\Schedule;

class ScheduleTranslation extends Model
{
    protected $baseModuleModel = Schedule::class;
}
