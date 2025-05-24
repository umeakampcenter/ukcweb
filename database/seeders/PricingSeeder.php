<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\PricingRepository;
use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Pricing::count() > 0) {
            return;
        }

        app(PricingRepository::class)->create([
            'title' => [
                'sv' => 'Priser',
                'en' => 'Pricing'
            ]
        ]);
    }
}
