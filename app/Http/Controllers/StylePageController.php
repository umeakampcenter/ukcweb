<?php

namespace App\Http\Controllers;

use App\Models\StylePage;
use Illuminate\Http\Request;
use A17\Twill\Services\MediaLibrary\ImageService;

class StylePageController extends Controller
{
    public function __invoke(Request $request)
    {
        $stylePage = StylePage::where('linkPath', '=', "/{$request->path()}")->first();

        if (!isset($stylePage)) {
            abort(404);
        }

        return view('stylePage', [
            "stylePage" => $stylePage,
        ]);
    }
}