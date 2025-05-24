<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        if (Page::count() > 0) {
            return;
        }

        app(PageRepository::class)->create([
            'title' => [
                'sv' => 'Gracie Barra BJJ',
                'en' => 'Gracie Barra BJJ'
            ],
            'linkPath' => '/bjj'
        ]);

        app(PageRepository::class)->create([
            'title' => [
                'sv' => 'Jujutsu',
                'en' => 'Jujutsu'
            ],
            'linkPath' => '/jujutsu'
        ]);

        app(PageRepository::class)->create([
            'title' => [
                'sv' => 'Självförsvar för tjejer',
                'en' => 'Self-defence for women'
            ],
            'linkPath' => '/self-defence'
        ]);

        app(PageRepository::class)->create([
            'title' => [
                'sv' => 'BJJ barnträning',
                'en' => 'BJJ children classes'
            ],
            'linkPath' => '/bjj-children'
        ]);
    }
}
