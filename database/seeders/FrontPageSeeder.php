<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\FrontPageRepository;
use App\Models\FrontPage;

class FrontPageSeeder extends Seeder
{
    public function run()
    {
        if (FrontPage::count() > 0) {
            return;
        }

        app(FrontPageRepository::class)->create([
            'title' => [
                'sv' => 'Välkommen till Umeå Kampcenter',
                'en' => 'Welcome to Umeå Kampcenter'
            ],
            'intro' => [
                'sv' => 'Umeå Kampcenter erbjuder Kagami Ryu Jujutsu och Gracie Barra Brazilian Jiu-Jitsu. Dessutom har vi gratis självförsvar för tjejer på söndagar! Som medlem får du träna alla våra stilar. Självklart får du testa på några tillfällen innan du betalar! För att träna på våra vuxenpass måste du vara minst 14 år gammal.',
                'en' => 'Umeå Kampcenter offers Kagami Ryu Jujutsu and Gracie Barra Brazilian Jiu-Jitsu. We also offer free self-defence for women on sundays! As a member you can train all our styles. Trying out our classes are free. Adult classes are for age 14 and up.'
            ]
        ]);
    }
}
