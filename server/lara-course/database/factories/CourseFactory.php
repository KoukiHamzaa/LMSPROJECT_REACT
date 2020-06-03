<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'sub_title' => $faker->word,
        'description' => $faker->text,
        'about_instructor' => $faker->text,
        'playlist_url' => $faker->word,
        'photo' => $faker->word,
        'promo_video_url' => $faker->word,
        'tags' => $faker->word,
        'creator_status' => $faker->randomDigitNotNull,
        'admin_status' => $faker->randomDigitNotNull,
        'what_will_student_learn' => $faker->text,
        'target_student' => $faker->text,
        'requirements' => $faker->text,
        'discount_price' => $faker->randomDigitNotNull,
        'actual_price' => $faker->randomDigitNotNull,
        'view_count' => $faker->randomDigitNotNull,
        'subscriber_count' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
