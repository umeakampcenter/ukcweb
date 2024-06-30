<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Forms\Option;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;
use A17\Twill\Services\Forms\Fields\Medias;

class Instructors extends TwillBlockComponent
{
    public static function getBlockTitle(): string 
    {
        return 'Instructors';
    }

    public static function getBlockIcon(): string
    {
        return 'media-list';
    }

    public function render(): View
    {
        return view('components.twill.blocks.instructors');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable()->required(),
            InlineRepeater::make()
                ->name('instructors')
                ->label('Instructors')
                ->fields([
                    Medias::make()
                        ->name('instructorImage')
                        ->label('Photo')
                        ->max(1),
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
                            Option::make('6 dan', '6 dan'),
                            Option::make('blue', 'Blue'),
                            Option::make('purple', 'Purple'),
                            Option::make('brown', 'Brown'),
                            Option::make('black', 'Black')
                        ])
                    )
                ])
        ]);
    }
}
