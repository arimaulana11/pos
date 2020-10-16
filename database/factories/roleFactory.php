<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\role;
use Faker\Generator as Faker;

$factory->define(role::class, function (Faker $faker) {

    return [
        'id_user' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
