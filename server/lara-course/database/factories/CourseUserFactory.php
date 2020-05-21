<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CourseUser;
use Faker\Generator as Faker;

$factory->define(CourseUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'user_account_id' => $faker->randomDigitNotNull,
        'paid_data' => $faker->date('Y-m-d H:i:s'),
        'expiry_date' => $faker->date('Y-m-d H:i:s'),
        'plan' => $faker->word,
        'paid_amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
