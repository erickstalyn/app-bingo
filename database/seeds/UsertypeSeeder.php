<?php

use Illuminate\Database\Seeder;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertype')->insert([
            'description' => 'ADMINISTRADOR'
        ]);
    }
}
