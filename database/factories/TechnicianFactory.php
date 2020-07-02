<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Technician;
use Faker\Generator as Faker;

$factory->define(Technician::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'badge_id' => $faker->bankAccountNumber
    ];
});
