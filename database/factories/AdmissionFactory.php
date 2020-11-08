<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admission;
use Faker\Generator as Faker;

$factory->define(Admission::class, function (Faker $faker) {

    return [
        'role_no' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'father_name' => $faker->word,
        'mother_name' => $faker->word,
        'contact_phone' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'dob' => $faker->word,
        'phone' => $faker->word,
        'address' => $faker->text,
        'current_address' => $faker->word,
        'nationality' => $faker->word,
        'passport' => $faker->word,
        'status' => $faker->word,
        'date_registered' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
