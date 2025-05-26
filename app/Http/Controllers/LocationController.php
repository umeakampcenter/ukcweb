<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class LocationController extends Controller
{
    public function show()
    {
        $page = DB::table('locations')
            ->join('location_translations', function (JoinClause $join) {
                $join->on('locations.id', '=', 'location_translations.location_id')
                    ->where('location_translations.locale', '=', App::currentLocale());
            })
            ->select('googleMaps', 'streetView', 'location_translations.title as title', 'location_translations.text as text')
            ->first();

        return view('location', [
            'title' => $page->title,
            'text' => $page->text,
            'googleMaps' => $page->googleMaps,
            'streetView' => $page->streetView
        ]);
    }
}
