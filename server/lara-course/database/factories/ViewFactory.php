<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\View;
use Faker\Generator as Faker;

$factory->define(View::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'user_account_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'item_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
