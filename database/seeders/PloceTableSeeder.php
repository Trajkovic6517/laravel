<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PloceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plocas')->insert(
            [
                ['naziv' => 'Songs of Faith and Devotion - Depeche mode', 'slika' => 'https://upload.wikimedia.org/wikipedia/en/7/76/Depeche_Mode_-_Songs_of_Faith_and_Devotion.png', 'opis' => 'SOFAD je osmi studijski album engleskog elektronskog benda Depeche mode. ', 'cena' => 4000, 'kategorija_id' => 3],
                ['naziv' => 'AM - Arctic Monkeys', 'slika' => 'https://www.nme.com/wp-content/uploads/2016/09/2013ArcticMonkeys_Am_150713.jpg', 'opis' => 'AM je peti studijski album engleskog indie rok benda Arctic Monkeys. ', 'cena' => 2500, 'kategorija_id' => 1],
                ['naziv' => 'Euforija - Buc Kesidi', 'slika' => 'https://f4.bcbits.com/img/a2519191499_10.jpg', 'opis' => 'Buč Kesidi su objavili vinilno izdanje hvaljenog albuma Euforija. Limitirana serija crvenih ploča. ', 'cena' => 3000, 'kategorija_id' => 2],
                ['naziv' => 'In the Wee Small Hours - Frank Sinatra', 'slika' => 'https://images-na.ssl-images-amazon.com/images/I/519S4-MWr5L.jpg', 'opis' => 'In the Wee Small Hours je deveti studijski album Frenka Sinatre. ', 'cena' => 1500, 'kategorija_id' => 4]
                
            ]
        );
    }
}
