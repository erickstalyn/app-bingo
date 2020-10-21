<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsertypeSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(BingoSeeder::class);
        $this->call(BallSeeder::class);

        $this->call(GameTypeSeeder::class);
    }
}
