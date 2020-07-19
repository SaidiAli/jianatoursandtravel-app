<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        // 'hotel_id' => factory(App\Hotel::class),
        'name' => $faker->name,
        'description' => $faker->sentence(),
        'price' => $faker->randomNumber(5),
        'is_bookable' => true
    ];
});
