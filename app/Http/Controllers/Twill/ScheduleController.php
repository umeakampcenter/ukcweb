<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

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
