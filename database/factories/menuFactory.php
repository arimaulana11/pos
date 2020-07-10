<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\menu;
use Faker\Generator as Faker;

$factory->define(menu::class, function (Faker $faker) {

    return [
        'perent_id' => $faker->word,
        'name' => $faker->word,
        'link' => $faker->word,
        'id_company' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
