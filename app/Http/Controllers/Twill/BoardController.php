<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class BoardController extends BaseModuleController
{
    protected $moduleName = 'boards';

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
                ->required()
        ]);
    }
}
