<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'code_uni' => '170498K',
            'names' => 'José Anderson Cespedes Diaz',
            'income_cycle' => '2017-I'
        ]);
        Person::create([
            'code_uni' => '170517E',
            'names' => 'Areliz Verania Chapoñan Villalobos',
            'income_cycle' => '2017-I'
        ]);
        Person::create([
            'code_uni' => '170473E',
            'names' => 'Erick Stalyn Pacherrez Puyén',
            'income_cycle' => '2016-I'
        ]);
    }
}
