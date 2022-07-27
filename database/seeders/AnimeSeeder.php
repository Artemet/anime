<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table animes');
        DB::table('animes')->insert([
            ['img' => 'res/anime_mahoutsukai-reimeiki.jpg', 'name' => 'Хроники магия', 'categories' => '[5,1,2,3]'],
            ['img' => 'res/anime_mahoutsukai-reimeiki.jpg', 'name' => 'Восхождение чародея', 'categories' => '[4,2,3]'],
            ['img' => 'res/naruto_manga_preview_2_71.jpg', 'name' => 'Мак Целитель', 'categories' => '[8,1]'],
            ['img' => 'res/anime_mahoutsukai-reimeiki.jpg', 'name' => 'Хроники магия', 'categories' => '[5,1,2,3]'],
            ['img' => 'res/anime_mahoutsukai-reimeiki.jpg', 'name' => 'Восхождение чародея', 'categories' => '[4,2,3]'],
            ['img' => 'res/naruto_manga_preview_2_71.jpg', 'name' => 'Мак Целитель', 'categories' => '[8,1]'],
        ]);
    }
}
