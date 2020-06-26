<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'note' => $faker->randomDigitNotNull,
        'NB' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
