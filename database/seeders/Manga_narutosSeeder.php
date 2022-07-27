<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Manga_narutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table manga_narutos');
        DB::table('manga_narutos')->insert([
            ['img' => 'res/pages/anime_naruto_season-1.jpg', 'name' => '1 сезон', 'number_card' => '220 серий'],
            ['img' => 'res/pages/anime_naruto_season-2.jpg', 'name' => '2 сезон', 'number_card' => '500 серий'],
            ['img' => 'res/pages/anime_naruto_season-3.jpg', 'name' => '3 сезон', 'number_card' => '258 серий'],
            ['img' => 'res/pages/anime_naruto_film.jpg', 'name' => 'Фильмы', 'number_card' => '11 фильмов'],
            ['img' => 'res/pages/anime_naruto_ova.jpg', 'name' => 'OVA', 'number_card' => '35 OVA'],
            ['img' => 'res/pages/anime_naruto_chibi.jpg', 'name' => 'Чиби', 'number_card' => '51 серия'],
        ]);
    }
}
