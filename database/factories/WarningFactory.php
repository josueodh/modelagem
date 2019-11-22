<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Warning;
use Faker\Generator as Faker;

$factory->define(Warning::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text,
        'user_id' => $faker->biasedNumberBetween($min = 1, $max = 35, $function = 'sqrt'),
        'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
    ];
});
