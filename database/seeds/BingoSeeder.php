<?php

use Illuminate\Database\Seeder;
use App\Bingo;

class BingoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bingo::class, 50)->create();
    }
}
