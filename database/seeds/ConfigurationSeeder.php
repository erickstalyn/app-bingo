<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'code' => 'PLLC',
            'description' => 'PERMISO PARA LLENAR CARTILLAS',
            'state' => true
        ]);
    }
}
