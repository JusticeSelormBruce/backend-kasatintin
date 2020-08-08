<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->title,
        'content'=>$faker->paragraph,
        'post_type'=> $faker->randomElement(['text','video']),
        'author_id'=> $faker->numberBetween(1,100),
        'categories_id'=> $faker->numberBetween(1,6),

    ];
});
