<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\barang;
use Faker\Generator as Faker;

$factory->define(barang::class, function (Faker $faker) {

    return [
        'id_company' => $faker->randomDigitNotNull,
        'nama' => $faker->word,
        'harga' => $faker->randomDigitNotNull,
        'stok' => $faker->randomDigitNotNull,
        'code' => $faker->word,
        'category' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
