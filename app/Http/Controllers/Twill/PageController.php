<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';
    
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    public function getCreateForm(): Form
    {
        return Form::make([
            Input::make()
                ->name('title')
                    ->required()
                    ->label('Page title')
                    ->note('As it will appear in the main menu')
                    ->placeholder('Jujutsu')
                    ->translatable(),
            
            Input::make()
                ->name('linkPath')
                    ->required()
                    ->label('Page path')
                    ->note('Should begin with a "/" and contain only lowercase letters and hyphens')
                    ->placeholder('/jujutsu')
        ]);
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

    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('linkPath')->title('Page path')
        );

        return $table;
    }
}
