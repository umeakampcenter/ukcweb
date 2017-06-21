<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class FrontController extends Controller
{
    public function show()
    {
        return view('front');
    }

    private function getFacebook()
    {
        $client = new Client();
        $client->request("GET", "https://graph.facebook.com/1400036366920241/feed");
    }
}

