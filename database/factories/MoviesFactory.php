<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    $genresCount = \App\Genre::count();
    //$directorsCount = \App\Director::count();
    return [
        'title' => $faker->sentence(),
        'awards' => $faker->numberBetween(1,100),
        'release_date' => $faker->date(),
        'length' => $faker->numberBetween(90,200),
        'genre_id' => $faker->numberBetween(1,$genresCount),
        'poster' => $faker->image($dir = '/poster'),
        'director_id' => $faker->numberBetween(1,13)
    ];
});
