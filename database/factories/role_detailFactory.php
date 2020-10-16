<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\role_detail;
use Faker\Generator as Faker;

$factory->define(role_detail::class, function (Faker $faker) {

    return [
        'id_menu' => $faker->randomDigitNotNull,
        'id_role' => $faker->randomDigitNotNull,
        'read' => $faker->word,
        'create' => $faker->word,
        'edit' => $faker->word,
        'delete' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
