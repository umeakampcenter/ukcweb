<?php
namespace App\Minify;

use MatthiasMullie\Minify\CSS;

class Minify
{
    public function run()
    {
        $targetPath = public_path("css") . "/app.min.css";
        $minifier = new CSS();
        foreach ($this->getCssFiles() as $relativePath) {
            $minifier->add(public_path($relativePath));
        }
        $minifier->minify($targetPath);
    }

    public function getCssFiles()
    {
        $config = $this->getConfig();
        return $config["cssFiles"];
    }

    private function getConfig()
    {
        return json_decode(file_get_contents(resource_path("assets/css/minify.json")), true);
    }
}