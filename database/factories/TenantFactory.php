<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'lease_started_at' => $faker->dateTimeBetween('-2 years', '-1 year'),
        'lease_expires_at' => $faker->dateTimeBetween('1 year', '2 years'),
        'has_cats' => $faker->boolean,
        'has_dogs' => $faker->boolean
    ];
});
