<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\User;

use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => implode(' ', $faker->paragraphs),
        'deleted_at' => null,
        'activated' => rand(0, 1),
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
