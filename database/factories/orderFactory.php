<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {

    return [
        'id_user' => $faker->randomDigitNotNull,
        'tanggal' => $faker->word,
        'id_company' => $faker->randomDigitNotNull,
        'total_harga' => $faker->randomDigitNotNull,
        'total_qty' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
