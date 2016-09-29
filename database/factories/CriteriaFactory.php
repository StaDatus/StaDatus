<?php

$factory->define(App\Criteria::class, function (Faker\Generator $faker) {    
    return [
        'article' => $faker->sentence(4),
        'item' => $faker->paragraph(2),
    ];
});
