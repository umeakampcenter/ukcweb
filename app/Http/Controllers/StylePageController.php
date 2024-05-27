<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;

class StylePageController extends Controller
{
    public function __invoke(Request $request)
    {
        $stylePage = DB::table('style_pages')
            ->join('style_page_translations', function (JoinClause $join) {
                $join->on('style_pages.id', '=', 'style_page_translations.style_page_id')
                    ->where('style_page_translations.locale', '=', App::currentLocale());
            })
            ->where('style_pages.linkPath', '=', "/{$request->path()}")
            ->select('style_page_translations.title as title')
            ->first();

        if (!isset($stylePage)) {
            abort(404);
        }

        return view('stylePage', [
            "title" => $stylePage->title
        ]);
    }
}
