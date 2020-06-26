<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tp_td;
use Faker\Generator as Faker;

$factory->define(tp_td::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'tp_td' => $faker->randomDigitNotNull,
        'file' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
