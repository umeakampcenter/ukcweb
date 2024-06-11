<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = Page::where('linkPath', '=', "/{$request->path()}")->first();

        if (!isset($page)) {
            abort(404);
        }

        return view('page', [
            "page" => $page,
        ]);
    }
}