<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class WelcomeController extends Controller
{
    public function show()
    {
        $response = $this->getFacebook();
        return view('welcome', ["facebookPosts" => $response]);
    }

    private function getFacebook()
    {
        $client = new Client([
            "verify" => true,
            "headers" => [
                "Accept" => "application/json",
                "Authorization" => "Bearer " . env("FACEBOOK_TOKEN")
            ]
        ]);
        $response = $client->request(
            "GET",
            "https://graph.facebook.com/1400036366920241/posts?fields=message,permalink_url,object_id&limit=3",
        );

    }
}

