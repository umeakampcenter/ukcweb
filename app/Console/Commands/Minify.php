<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MatthiasMullie\Minify\CSS;

class Minify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Minifies all CSS files in resources/assets/css and creates public/css/app.min.css';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sourcePath = resource_path("assets/css") . "/*.css";
        $targetPath = public_path("css") . "/app.min.css";
        $filePaths = glob($sourcePath);
        $minifier = new CSS();
        foreach ($filePaths as $filePath) {
            $minifier->add($filePath);
        }
        $minifier->minify($targetPath);
    }
}
