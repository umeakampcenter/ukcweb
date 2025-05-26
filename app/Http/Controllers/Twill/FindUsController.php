<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class FindUsController extends BaseModuleController
{
    protected $moduleName = 'findUs';

    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getForm(TwillModelContract $model): Form
    {
         return Form::make([
            Wysiwyg::make()
                ->name('text')
                ->label('Text')
                ->toolbarOptions([
                    [
                        'header' => [1,2]
                    ],
                    'bullet',
                    'link'
                ])
                ->translatable()
                ->required(),
            Input::make()
                ->name('googleMaps')
                ->label('Google maps')
                ->placeholder('https://www.google.com/maps...'),
            Input::make()
                ->name('streetView')
                ->label('Google street view')
                ->placeholder('https://www.google.com/maps...')
        ]);
    }
}
