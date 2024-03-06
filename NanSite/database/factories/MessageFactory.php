<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {

    $userId = App\User::inRandomOrder()->first()->id;
    $recipient = App\User::inRandomOrder()->first()->name;

    return [
        
        'user_id'   => $userId,
        'recipient' => $recipient,
        'content'   => $faker->paragraph
    ];
});
