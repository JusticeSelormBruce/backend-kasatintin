<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'url' => $faker->imageUrl(800,600),
        'post_id' => $faker->numberBetween(1, 1500),
        'featured'=>$faker->randomElement([true,false]),
    ];
});
