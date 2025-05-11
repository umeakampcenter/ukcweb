<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\BoardRepository;
use App\Models\Board;

class BoardSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Board::count() > 0) {
            return;
        }

        app(BoardRepository::class)->create([
            'title' => [
                'en' => 'Board',
                // add other languages here
            ],
            'description' => [
                'en' => '',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
