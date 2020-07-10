<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\company;
use Faker\Generator as Faker;

$factory->define(company::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'no_telp' => $faker->word,
        'alamat' => $faker->text,
        'expired' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
