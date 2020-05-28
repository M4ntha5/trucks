<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Truck;
use Faker\Generator as Faker;

$factory->define(Truck::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomDigit(),
        'year_made' => $faker->numberBetween(1900, 2020),
        'user' => $faker->name(),
        'users_count' => $faker->randomDigit(),
        'comment' => $faker->sentences()
    ];
});
