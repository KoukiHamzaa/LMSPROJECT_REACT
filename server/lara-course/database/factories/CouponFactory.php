<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Coupon;
use Faker\Generator as Faker;

$factory->define(Coupon::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'student_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'user_account_id' => $faker->randomDigitNotNull,
        'available_on_course_page' => $faker->word,
        'type' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'deadline' => $faker->date('Y-m-d H:i:s'),
        'count_timer' => $faker->randomDigitNotNull,
        'total_available' => $faker->randomDigitNotNull,
        'total_remaining' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
