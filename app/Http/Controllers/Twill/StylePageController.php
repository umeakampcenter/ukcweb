<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Services\Forms\InlineRepeater;
use App\Models\Section;

class StylePageController extends BaseModuleController
{
    protected $moduleName = 'stylePages';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    /**
     * First step when creating a page for a new style.
     */
    public function getCreateForm(): Form
    {
        // https://twillcms.com/docs/form-fields/input.html
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

    /**
     * Form for the page content
     */
    public function getForm(TwillModelContract $model): Form
    {
        return Form::make([
            InlineRepeater::make()
                ->name('sections')
                ->label('Sections')
                ->relation(Section::class) 
                ->fields([
                    Input::make()->name('title')->translatable()->required(),
                    Wysiwyg::make()
                        ->name('text')
                        ->label('Text')
                        ->toolbarOptions(['clean', 'bullet', 'link'])
                        ->translatable()
                        ->required()
                ]),
            InlineRepeater::make()
                ->name('instructors')
                ->label('Instructors')
                ->fields([
                    Input::make()
                        ->name('imagePath')
                        ->label('Image path')
                        ->placeholder('/images/instructors/someone.jpg'),
                    Input::make()->name('name')->label('Name')->required(),
                    Input::make()->name('phone')->label('Phone'),
                    Select::make()->name('belt')->label('Belt')->options(
                        Options::make([
                            Option::make('5 kyu', '5 kyu'),
                            Option::make('4 kyu', '4 kyu'),
                            Option::make('3 kyu', '3 kyu'),
                            Option::make('2 kyu', '2 kyu'),
                            Option::make('1 kyu', '1 kyu'),
                            Option::make('1 dan', '1 dan'),
                            Option::make('2 dan', '2 dan'),
                            Option::make('3 dan', '3 dan'),
                            Option::make('4 dan', '4 dan'),
                            Option::make('5 dan', '5 dan'),
                            Option::make('blue', 'Blue'),
                            Option::make('purple', 'Purple'),
                            Option::make('brown', 'Brown'),
                            Option::make('black', 'Black')
                        ])
                    )
                ])
        ]);
    }

    /**
     * How style pages are listed in the CMS ("table" is the list of pages)
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('linkPath')->title('Page path')
        );

        return $table;
    }
}
