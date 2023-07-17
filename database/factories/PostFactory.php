<?php

/** @var Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(
    Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'summary' => $faker->sentence,
        'detail' => $faker->text,
    ];
});
