<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'gender' => $faker->word,
        'date_of_birth' => $faker->word,
        'isSubscribed' => $faker->word,
        'email' => $faker->word,
        'password' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
