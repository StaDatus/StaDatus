<?php

$factory->define(App\Law::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->unique()->url,
    ];
});
