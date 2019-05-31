<?php
namespace App\Http\ViewComposer;

use App\Minify\Minify;
use ied3vil\LanguageSwitcher\LanguageSwitcher;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Jenssegers\Date\Date;

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
        $view->with("isSwedish", $this->languageSwitcher->getCurrentLanguage() == 'sv');
        if (App::environment('local')) {
            $scripts = $this->minify->getJsFiles();
            $stylesheets = $this->minify->getCssFiles();
        } else {
            $scripts = ["js/app.min.js?" . $this->minify->getTimestamp()];
            $stylesheets = ["css/app.min.css?" . $this->minify->getTimestamp()];
        }
        $view->with("scripts", $scripts);
        $view->with("stylesheets", $stylesheets);

        $globals = new Globals();
        $globals->year = Date::now()->format('Y');

        $view->with("global", $globals);
    }
}
