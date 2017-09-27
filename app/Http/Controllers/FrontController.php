<?php
namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Guzzle\GuzzleFactory;
use GuzzleHttp\Exception\RequestException;
use Jenssegers\Date\Date;

class FrontController extends Controller
{
    /** @var GuzzleFactory */
    private $guzzleFactory;
    /** @var Handler */
    private $exceptionHandler;

    public function __construct(GuzzleFactory $guzzleFactory, Handler $exceptionHandler)
    {
        $this->guzzleFactory = $guzzleFactory;
        $this->exceptionHandler = $exceptionHandler;
    }

    public function show()
    {
        $posts = $this->getLatestFacebookPosts();
        return view('front', ["facebookPosts" => $posts]);
    }

    private function getLatestFacebookPosts()
    {
        try {
            $client = $this->guzzleFactory->forFacebook();
            $response = $client->request(
                "GET",
                "https://graph.facebook.com/1400036366920241/posts",
                [
                    "query" => [
                        "fields" => "message,permalink_url,object_id,created_time",
                        "limit" => 6
                    ]
                ]
            );
        } catch (RequestException $e) {
            $this->exceptionHandler->report($e);
            return [];
        }
        $result = json_decode($response->getBody(), true);
        $posts = [];
        foreach ($result["data"] as $i => $rawPost) {
            if (!isset($rawPost["message"])) {
                continue;
            }
            $posts []= [
                "message" => $rawPost["message"],
                "createDateTime" => new Date($rawPost["created_time"]),
                "url" => array_key_exists("object_id", $rawPost) ? $rawPost["permalink_url"] : null
            ];
            if (count($posts) > 2) {
                break;
            }
        }
//        \Log::info(var_export($posts, true));
        return $posts;
    }
}

