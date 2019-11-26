<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = '1 years', $timezone = null)
    ];
});
