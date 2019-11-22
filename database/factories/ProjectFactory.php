<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1000, $max = 25000),
        'category_id' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
        'client' => $faker->name,
        'description' => $faker->text,
    ];
});
