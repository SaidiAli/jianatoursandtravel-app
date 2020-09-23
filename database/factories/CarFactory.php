<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->sentence(),
        'condition' => $faker->words(5, true),
        'drive_type' => 'manual',
        'door_count' => 3,
        'fuel' => 'Diesel',
        'color' => 'Black',
        'price' => '10000000',
        'year' => '2020',
        'type' => 'SUV',
        'brand' => 'Toyota',
        'hire' => true,
        'location' => $faker->state,
        'luggage_capacity' => '50'
     ];
});
