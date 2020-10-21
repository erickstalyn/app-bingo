<?php

use Illuminate\Database\Seeder;
use App\Ball;

class BallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 75; $i++) { 
            if ( $i <= 15 ) $letter = 'B';
            else if ( $i <= 30 ) $letter = 'I';
            else if ( $i <= 45 ) $letter = 'N';
            else if ( $i <= 60 ) $letter = 'G';
            else if ( $i <= 75 ) $letter = 'O';
            
            Ball::create([
                'letter' => $letter,
                'number' => $i,
                'state' => false
            ]);
        }
    }
}
