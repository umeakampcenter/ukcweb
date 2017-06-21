<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    private function getFacebook()
    {
        $client = new Client();
        $client->request("GET", "https://graph.facebook.com/1400036366920241/feed");
    }
}

