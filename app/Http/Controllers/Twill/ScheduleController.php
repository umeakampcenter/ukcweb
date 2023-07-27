<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;

class ScheduleController extends BaseModuleController
{
    protected $moduleName = 'schedules';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getCreateForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->label('Title')->translatable(),
            Select::make()->name('day')->label('Day of the week')->options(
                Options::make([
                    Option::make('monday', 'Monday'),
                    Option::make('tuesday', 'Tuesday'),
                    Option::make('wednesday', 'Wednesday'),
                    Option::make('thursday', 'Thursday'),
                    Option::make('friday', 'Friday'),
                    Option::make('saturday', 'Saturday'),
                    Option::make('sunday', 'Sunday'),
                ])
            ),
            Input::make()->name('start')->label('Start of class'),
            Input::make()->name('end')->label('End of class'),
            Select::make()->name('typeOfClass')->label('Type of class')->options(
                Options::make([
                    Option::make('jujutsu', 'Jujutsu'),
                    Option::make('bjj', 'BJJ'),
                    Option::make('misc', 'Other'),
                ])
            )
        ]);
    }

    public function getForm(TwillModelContract $model): Form
    {
        return Form::make([
            Input::make()->name('title')->label('Title')->translatable(),
            Select::make()->name('day')->label('Day of the week')->options(
                Options::make([
                    Option::make('monday', 'Monday'),
                    Option::make('tuesday', 'Tuesday'),
                    Option::make('wednesday', 'Wednesday'),
                    Option::make('thursday', 'Thursday'),
                    Option::make('friday', 'Friday'),
                    Option::make('saturday', 'Saturday'),
                    Option::make('sunday', 'Sunday'),
                ])
            ),
            Input::make()->name('start')->label('Start of class'),
            Input::make()->name('end')->label('End of class'),
            Select::make()->name('typeOfClass')->label('Type of class')->options(
                Options::make([
                    Option::make('jujutsu', 'Jujutsu'),
                    Option::make('bjj', 'BJJ'),
                    Option::make('misc', 'Other'),
                ])
            )
        ]);
    }
}
