<?php
namespace App\Guzzle;

use GuzzleHttp\Client;

class GuzzleFactory
{
    public function forFacebook()
    {
        return new Client([
            "verify" => true,
            "headers" => [
                "Accept" => "application/json",
                "Authorization" => "Bearer " . env("FACEBOOK_TOKEN")
            ]
        ]);
    }
}
