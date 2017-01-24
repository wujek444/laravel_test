<?php

use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //bez new, bo deklaracja statyczna (generowanie fake'owych danych do testowania)
        //czyli coś jak Lorem ipsum
        //kukamy pola w bazie danych, a nie w klasie!!!
        for($i=0; $i<100; $i++){ //generujemy 100 podstron (100 rekordów)
            $page = new Pages();
            $page->title = $faker -> company;
            $page->content = $faker -> text(200);
            $page->save();
        }
    }
}
