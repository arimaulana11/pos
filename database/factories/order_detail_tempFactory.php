<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\order_detail_temp;
use Faker\Generator as Faker;

$factory->define(order_detail_temp::class, function (Faker $faker) {

    return [
        'id_order' => $faker->randomDigitNotNull,
        'id_barang' => $faker->randomDigitNotNull,
        'qty' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
