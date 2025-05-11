<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class BoardController extends Controller
{
    public function show()
    {
        $frontPage = DB::table('boards')
            ->join('board_translations', function (JoinClause $join) {
                $join->on('boards.id', '=', 'board_translations.board_id')
                    ->where('board_translations.locale', '=', App::currentLocale());
            })
            ->select('board_translations.title as title', 'board_translations.text as text')
            ->first();

        return view('board', [
            "title" => $frontPage->title,
            "text" => $frontPage->text
        ]);
    }
}
