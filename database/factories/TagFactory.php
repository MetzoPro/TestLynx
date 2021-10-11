<?php

namespace Database\Factories;



use App\Models\Tag;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory */

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->sentence
    ];
});
