<?php

/** @var Factory $factory */

use App\Models\ProductCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(
    ProductCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'description' => $faker->text,
    ];
});
