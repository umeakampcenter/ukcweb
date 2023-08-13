<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use stdClass;

class FrontPageController extends Controller
{
    public function show()
    {
        $frontPage = DB::table('front_pages')
            ->join('front_page_translations', function (JoinClause $join) {
                $join->on('front_pages.id', '=', 'front_page_translations.front_page_id')
                    ->where('front_page_translations.locale', '=', App::currentLocale());
            })
            ->select('front_page_translations.title as title', 'front_page_translations.intro as intro', 'front_pages.styles as styles')
            ->first();

        $styles = [];
        foreach (json_decode($frontPage->styles) as $styleObj) {
            $style = new stdClass();
            $style->title = $styleObj->title->{App::currentLocale()};
            $style->intro = $styleObj->intro->{App::currentLocale()};
            $style->linkPath = $styleObj->linkPath;
            $styles[] = $style;
        }

        return view('frontPage', [
            "title" => $frontPage->title,
            "intro" => $frontPage->intro,
            "styles" => $styles
        ]);
    }
}
