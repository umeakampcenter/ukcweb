<?php
namespace App\Minify;

use MatthiasMullie\Minify\CSS;

class Minify
{
    private static $configPath = resource_path("assets/css/minify.json");

    public function run()
    {
        $targetPath = public_path("css") . "/app.min.css";
        $minifier = new CSS();
        foreach ($this->getCssFiles() as $filePath) {
            $minifier->add($filePath);
        }
        $minifier->minify($targetPath);
    }

    public function getCssFiles()
    {
        $config = $this->getConfig();
        $cssFiles = array_map(function ($filename) {
            return public_path("css") . "/$filename";
        }, $config["cssFiles"]);

        return $cssFiles;
    }

    private function getConfig()
    {
        return json_decode(file_get_contents(self::$configPath), true);
    }
}