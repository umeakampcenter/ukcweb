<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

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
     * @var \App\Minify\Minify
     */
    private $minify;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(\App\Minify\Minify $minify)
    {
        parent::__construct();
        $this->minify = $minify;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->minify->run();
    }
}
