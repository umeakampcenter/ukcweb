<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\BoardRepository;
use App\Models\Board;

class BoardSeeder extends Seeder
{
    public function run()
    {
        if (Board::count() > 0) {
            return;
        }

        app(BoardRepository::class)->create([
            'title' => [
                'sv' => 'Styrelsen',
                'en' => 'Board'
            ],
            'text' => [
                'sv' => 
<<<DELIMITER
<h1>Styrelse</h1>
<p>Styrelsen är föreningens beslutande organ och ansvarar för föreningens angelägenheter.</p>
<p>Om du har några frågor till styrelsen kan du kontakta oss via <a target="" rel="noopener noreferrer nofollow" href="mailto:umeakampcenterif@gmail.com">umeakampcenterif@gmail.com</a></p>
<p><a target="_blank" rel="noopener noreferrer nofollow" href="https://umeakampcenter.se/ukc-stadgar-2024.pdf">Föreningens stadgar</a></p>
<br />
<h2>Styrelsemedlemmar</h2>
<ul>
<li><strong>Ordförande</strong><br>Jörgen Lindström</li>
<li><strong>Ledamot</strong><br>Linus Bergström</li>
<li><strong>Ledamot</strong><br>Hanna Johansson</li>
<li><strong>Ledamot</strong><br>Moa Karlsson Gustafsson</li>
<li><strong>Ledamot</strong>Mimmi Larsson</li>
<li><strong>Suppleant</strong><br>Liza Privosnik</li>
<li><strong>Suppleant</strong><br>Mathias Liljeblad</li>
</ul>
<br />
<h2>Hedersmedlemmar</h2>
<p>För lång och trogen tjänst.</p>
<ul>
<li>Lasse Häggblom</li>
<li>Cathrine Häggblom</li>
<li>Birgith Stenbäck</li>
</ul>
DELIMITER
, 'en' =>
<<<DELIMITER
<h1>Board</h1>
<p>The board is the decision-making body of Umeå Kampcenter and is responsible for all its concerns.</p>
<p>If you have any questions for the board you can contact us <a target="_blank" rel="noopener noreferrer nofollow" href="mailto:byumeakampcenterif@gmail.com">umeakampcenterif@gmail.com</a></p>
<p><a target="_blank" rel="noopener noreferrer nofollow" href="https://umeakampcenter.se/ukc-stadgar-2024.pdf">Rules of the association (swedish)</a></p>
<br />
<h2>Board members</h2>
<ul>
<li><strong>Head of the board</strong><br>Jörgen Lindström</p></li>
<li><strong>Board member</strong><br>Linus Bergström</li>
<li><strong>Board member</strong><br>Hanna Johansson</li>
<li><strong>Board member</strong><br>Moa Karlsson Gustafsson</li>
<li><strong>Board member</strong>Mimmi Larsson</li>
<li><strong>Alternate member</strong><br>Liza Privosnik</li>
<li><strong>Alternate member</strong><br>Mathias Liljeblad</li>
<br />
<h2>Honorary members</h2>
<p>For many years of service.</p>
<ul>
<li>Lasse Häggblom</li>
<li>Cathrine Häggblom</li>
<li>Birgith Stenbäck</li>
</ul>
DELIMITER
            ]
        ]);
    }
}
