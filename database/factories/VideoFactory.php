<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
       'title' => $faker->title,
       'url' => $faker->imageUrl(800,600),
       'post_id' => $faker->numberBetween(1,1500)
    ];
});
