<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use App\User;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'name' => $faker->words(2, true),
        'description' => $faker->sentence(),
        'email' => $faker->email,
        'district' => $faker->state,
        'web' => $faker->domainName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'cover_photo' => 'image.jpg'
    ];
});
