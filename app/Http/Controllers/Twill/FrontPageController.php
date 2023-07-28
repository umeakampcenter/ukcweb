<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class FrontPageController extends BaseModuleController
{
    protected $moduleName = 'frontPages';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getForm(TwillModelContract $model): Form
    {
        return Form::make([
            Wysiwyg::make()
                ->name('intro')
                ->label('Introduction')
                ->toolbarOptions(['clean'])
                ->translatable()
                ->required(),
            InlineRepeater::make()
                ->name('styles')
                ->label('Style') 
                ->fields([
                    Input::make()->name('title')->translatable()->required(),
                    Wysiwyg::make()
                        ->name('intro')
                        ->label('Introduction')
                        ->toolbarOptions(['clean'])
                        ->translatable()
                        ->required(),
                    Input::make()
                        ->name('linkPath')
                        ->label('Link to path')
                        ->placeholder('/jujutsu')
                ])
        ]);
    }
}
