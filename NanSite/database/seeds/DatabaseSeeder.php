<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            // CourseSeeder::class,
            // LessonSeeder::class,
            // AchievementSeeder::class,
            // CourseUserSeeder::class,
            // FunctionalitySeeder::class,
            // PostSeeder::class,
            // MessageSeeder::class,
            UserSeeder::class
        ]);
    }
}
