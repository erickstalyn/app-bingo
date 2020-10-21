<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'Erick Stalyn Pacherrez Puyén',
            'user' => 'stalyn',
            'password' => bcrypt('stalyn'),
            'usertype_id' => 1
        ], [
            'username' => 'José Anderson Cespedes Diaz',
            'user' => 'jose',
            'password' => bcrypt('jose'),
            'usertype_id' => 2
        ]);
    }
}
