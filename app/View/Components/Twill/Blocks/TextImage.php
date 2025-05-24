<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class TextImage extends TwillBlockComponent
{
    public static function getBlockTitle(): string 
    {
        return 'Text + image';
    }

    public static function getBlockIcon(): string
    {
        return 'image';
    }

    public function render(): View
    {
        return view('components.twill.blocks.text-image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable()->required(),
            Wysiwyg::make()
                ->name('text')
                ->label('Text')
                ->toolbarOptions(['clean', 'bullet', 'link', 'bold'])
                ->translatable()
                ->required(),
            Medias::make()
                ->name('sectionImage')
                ->label('Image')
                ->max(1)
        ]);
    }
}
