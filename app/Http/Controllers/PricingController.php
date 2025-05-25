<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{
    public function __invoke(Request $request)
    {
        $pricing = Pricing::query()->first();

        if (!isset($pricing)) {
            abort(404);
        }

        return view('pricing', [
            "page" => $pricing
        ]);
    }
}
