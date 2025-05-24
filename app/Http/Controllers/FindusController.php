<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class FindusController extends Controller
{
    public function show()
    {
        $page = DB::table('finduses')
            ->join('findus_translations', function (JoinClause $join) {
                $join->on('finduses.id', '=', 'findus_translations.findus_id')
                    ->where('findus_translations.locale', '=', App::currentLocale());
            })
            ->select('googleMaps', 'streetView', 'findus_translations.title as title', 'findus_translations.text as text')
            ->first();

        return view('findUs', [
            'text' => $page->text,
            'googleMaps' => $page->googleMaps,
            'streetView' => $page->streetView
        ]);
    }
}
