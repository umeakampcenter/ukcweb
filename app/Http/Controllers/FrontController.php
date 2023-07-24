<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function show()
    {
        return view('front', []);
    }
}
