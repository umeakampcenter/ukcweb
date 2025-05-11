<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class TextYoutube extends TwillBlockComponent
{
    public static function getBlockTitle(): string 
    {
        return 'Text + Youtube';
    }

    public static function getBlockIcon(): string
    {
        return 'video';
    }

    public function render(): View
    {
        return view('components.twill.blocks.text-youtube');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable()->required(),
            Wysiwyg::make()
                ->name('text')
                ->label('Text')
                ->toolbarOptions(['clean', 'bullet', 'link'])
                ->translatable()
                ->required(),
            Input::make()
                ->name('sectionVideo')
                ->label('Youtube URL')
                ->type(Input::TYPE_URL)
                ->placeholder('https://www.youtube.com/embed/...')
        ]);
    }
}
