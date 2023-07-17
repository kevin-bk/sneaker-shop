<?php

/** @var Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(
    Product::class, function (Faker $faker) {
    return [
        'sku' => $faker->unique()->postcode,
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'summary' => $faker->sentence,
        'detail' => $faker->text,
    ];
});
