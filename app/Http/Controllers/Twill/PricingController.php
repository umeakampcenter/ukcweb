<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class PricingController extends BaseModuleController
{
    protected $moduleName = 'pricings';

    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            BlockEditor::make()
                ->blocks(['app-textimage'])
        );

        return $form;
    }
}
