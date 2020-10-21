<?php

use Illuminate\Database\Seeder;
use App\Person;

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
            'usertype_id' => 1,
            'person_id' => Person::where('names', 'like', '%stalyn%')->first()['id']
        ], [
            'username' => 'José Anderson Cespedes Diaz',
            'user' => 'jose',
            'password' => bcrypt('jose'),
            'usertype_id' => 2,
            'person_id' => Person::where('names', 'like', '%josé%')->first()['id']
        ]);
    }
}
