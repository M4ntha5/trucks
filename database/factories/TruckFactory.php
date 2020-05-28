<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Truck;
use Faker\Generator as Faker;

$factory->define(Truck::class, function (Faker $faker) {
    return [
        'brand' => $faker->numberBetween(1,4),
        'year_made' => $faker->numberBetween(1900, 2020),
        'user' => $faker->name,
        'users_count' => $faker->randomDigit,
        'comment' => $faker->sentence()
    ];
});
