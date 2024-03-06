<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use App\Lesson;

use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker)
 {
     $userId = User::inRandomOrder()->first()->id;
     $lessonId = Lesson::inRandomOrder()->first()->id;

    return [

        'user_id'   => $userId,
        'lesson_id' => $lessonId,
        'content'   => $faker ->paragraph
    ];
});
