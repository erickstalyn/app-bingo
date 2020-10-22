<?php

use Faker\Generator as Faker;
use App\Bingo;
use App\Person;

$factory->define(Bingo::class, function (Faker $faker) {

    $getNumbers = function (int $index, int $cant = 5) use ($faker) {
        $numbers = [];
        while ( count($numbers) < $cant) {
            $numbers[] = $faker->numberBetween(($index * 15) + 1, ($index + 1) * 15);
            $numbers = array_unique($numbers, SORT_NUMERIC);
        }
        
        return $numbers;
    };

    return [
        'code' => $faker->regexify('[A-Z0-9]{8}'),
        'gamer' => $gamer = $faker->optional()->name(),
        'balls' => is_null($gamer) ? NULL : [
            'B' => $getNumbers(0),
            'I' => $getNumbers(1),
            'N' => $getNumbers(2, 4),
            'G' => $getNumbers(3),
            'O' => $getNumbers(4)
        ],
        'state_balls' => is_null($gamer) ? 'E' : 'F',
        'state_transaction' => is_null($gamer) ? 'U' : 'S',
        // 'state_transaction' => $faker->randomElement(['E', 'D']),
        'responsible_id' => Person::all()->random()
    ];
});
