<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'tenant_id' => $faker->numberBetween(1, 100),
        'request' => $faker->sentence,
        'details' => $faker->paragraph,
        'is_complete' => $faker->boolean(10)
    ];
});
