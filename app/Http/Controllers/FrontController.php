<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class FrontController extends Controller
{
    public function show()
    {
        $posts = $this->getLatestFacebookPosts();
        return view('front', ["facebookPosts" => $posts]);
    }

    private function getLatestFacebookPosts()
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
            "https://graph.facebook.com/1400036366920241/posts?fields=message,permalink_url,object_id,created_time&limit=3"
        );
        $result = json_decode($response->getBody(), true);
        $posts = [];
        foreach ($result["data"] as $i => $rawPost) {
            $posts[$i] = [
                "message" => $rawPost["message"],
                "createDateTime" => $rawPost["created_time"],
                "url" => array_key_exists("object_id", $rawPost) ? $rawPost["permalink_url"] : null
            ];
        }
//        \Log::info(var_export($posts, true));
        return $posts;
    }
}

