<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => Str::random(30), //sir gives 30 character
        'status' => true,
        'sort_order' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
