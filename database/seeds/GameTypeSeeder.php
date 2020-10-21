<?php

use Illuminate\Database\Seeder;
use App\GameType;

class GameTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameType::create(['description' => 'JUEGO SOLO CON LA B']);
        GameType::create(['description' => 'JUEGO SOLO CON LA I']);
        GameType::create(['description' => 'JUEGO SOLO CON LA N']);
        GameType::create(['description' => 'JUEGO SOLO CON LA G']);
        GameType::create(['description' => 'JUEGO SOLO CON LA O']);
        GameType::create(['description' => 'JUEGO EN L']);
        GameType::create(['description' => 'JUEGO CON TODA LA CARTILLA']);
    }
}
