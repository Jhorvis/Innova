<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        	'name' => $faker->name,
        	'descriptionLarge' => $faker->paragraph(1),
        	'code' => $faker->numberBetween(1000, 9999),
        	'maxStock' => $faker->numberBetween(100, 200),
        	'minStock' => $faker->numberBetween(1, 20),
        	'price' => $faker->numberBetween(100, 5000)
    ];
});

