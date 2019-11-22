<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'departament_id' => $faker->biasedNumberBetween($min = 1, $max = 6, $function = 'sqrt'),
        'description' => $faker->text($maxNbChars = 200),
    ];
});
