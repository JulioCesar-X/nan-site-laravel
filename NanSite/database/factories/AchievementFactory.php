<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Achievement;
use Faker\Generator as Faker;

$factory->define(Achievement::class, function (Faker $faker) {

    $userId = App\User::inRandomOrder()->first()->id;
    return [

        'user_id'       => $userId,
        'image_path'    => 'path/to/images/' . $faker->image('public/storage/images', 400, 300, null, false),
        'title'         => $faker->title,
        'description'   => $faker->paragraph
    ];
});
