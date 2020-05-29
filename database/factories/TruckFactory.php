<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Truck;
use Faker\Generator as Faker;

$factory->define(Truck::class, function (Faker $faker) {
    $currentYear = date('Y');
    return [
        'brand' => $faker->numberBetween(1,4),
        'year_made' => $faker->numberBetween(1900, $currentYear),
        'owner' => $faker->name,
        'owners_count' => $faker->randomDigit,
        'comment' => $faker->sentence()
    ];
});
