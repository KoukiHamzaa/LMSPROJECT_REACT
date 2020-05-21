<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'description' => $faker->text,
        'about_instructor' => $faker->text,
        'discount_price' => $faker->randomDigitNotNull,
        'actual_price' => $faker->randomDigitNotNull,
        'playlist_url' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'subscriber_count' => $faker->randomDigitNotNull,
        'status' => $faker->randomDigitNotNull,
        'photo' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
