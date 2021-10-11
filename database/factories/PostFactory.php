<?php

namespace Database\Factories;



use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory */

$factory->define(Post::class, function (Faker $faker) {
    return [
        'contenu' => $faker->paragraph(),
    ];
});
