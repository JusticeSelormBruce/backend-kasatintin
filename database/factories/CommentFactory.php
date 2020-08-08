<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [

        'content'=> $faker->paragraph,
        'author_id'=>$faker->numberBetween(1,100),
        'post_id' => $faker->numberBetween(1, 1500),
    ];
});
