<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        	'name' => $faker->name,
        	'descriptionLarge' => $faker->paragraph(1),
        	'code' => str_random(8),
        	'maxStock' => $faker->numberBetween(100, 200),
        	'minStock' => $faker->numberBetween(1, 20)
    ];
});

