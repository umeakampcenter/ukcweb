<?php
namespace App\Guzzle;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;

class GuzzleFactory
{
    public function forFacebook()
    {
        return new Client([
            "verify" => App::environment('production'),
            "headers" => [
                "Accept" => "application/json",
                "Authorization" => "Bearer " . env("FACEBOOK_TOKEN")
            ]
        ]);
    }
}
