<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\Role;

use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name'            => $faker->name,
        'email'           => $faker->unique()->safeEmail,
        'role_id'         => Role::all()->random()->id,
    ];
});
