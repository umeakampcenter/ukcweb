<?php
namespace App\Http\ViewComposer;

use App\Minify\Minify;
use ied3vil\LanguageSwitcher\LanguageSwitcher;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

class AppViewComposer
{
    /** @var LanguageSwitcher */
    private $languageSwitcher;
    /** @var Minify */
    private $minify;

    public function __construct(LanguageSwitcher $languageSwitcher, Minify $minify)
    {
        $this->languageSwitcher = $languageSwitcher;
        $this->minify = $minify;
    }

    public function compose(View $view)
    {
        $this->minify->run();
        $view->with("isSwedish", $this->languageSwitcher->getCurrentLanguage() == 'sv');
        if (App::environment('local')) {
            $stylesheets = $this->minify->getCssFiles();
        } else {
            $stylesheets = ["app.min.css"];
        }
        $view->with("stylesheets", $stylesheets);
    }
}
