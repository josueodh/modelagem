<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Warning;
use Faker\Generator as Faker;

$factory->define(Warning::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text,
        'user_id' => '1',
        'created_at' => $faker->date,
    ];
});
