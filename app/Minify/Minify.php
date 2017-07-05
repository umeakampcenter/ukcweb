<?php
namespace App\Minify;

use MatthiasMullie\Minify\JS;
use MatthiasMullie\Minify\CSS;

class Minify
{
    /** @var string */
    private $configPath;

    public function __construct()
    {
        $this->configPath = resource_path("assets/css/minify.json");
    }

    public function run()
    {
        $targetPath = public_path("js/app.min.js");
        $minifier = new JS();
        foreach ($this->getJsFiles() as $relativePath) {
            $minifier->add(public_path($relativePath));
        }
        $minifier->minify($targetPath);

        $targetPath = public_path("css/app.min.css");
        $minifier = new CSS();
        foreach ($this->getCssFiles() as $relativePath) {
            $minifier->add(public_path($relativePath));
        }
        $minifier->minify($targetPath);

        $this->timestampConfig();
    }

    public function getJsFiles()
    {
        $config = $this->getConfig();
        return $config["jsFiles"];
    }

    public function getCssFiles()
    {
        $config = $this->getConfig();
        return $config["cssFiles"];
    }

    public function getTimestamp()
    {
        $config = $this->getConfig();
        return $config["timestamp"];
    }

    private function getConfig()
    {
        return json_decode(file_get_contents($this->configPath), true);
    }

    private function timestampConfig()
    {
        $config = $this->getConfig();
        $config["timestamp"] = time();
        file_put_contents($this->configPath, json_encode($config, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}