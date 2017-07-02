<?php
namespace App\Http\ViewComposer;

use ied3vil\LanguageSwitcher\LanguageSwitcher;
use Illuminate\Contracts\View\View;

class AppViewComposer
{
    /** @var LanguageSwitcher */
    private $languageSwitcher;

    public function __construct(LanguageSwitcher $languageSwitcher)
    {
        $this->languageSwitcher = $languageSwitcher;
    }

    public function compose(View $view)
    {
        $view->with("isSwedish", $this->languageSwitcher->getCurrentLanguage() == 'sv');
    }
}
