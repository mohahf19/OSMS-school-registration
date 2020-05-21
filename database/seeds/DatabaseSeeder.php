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
        $this->call(UserSeeder::class);
        $this->call(SemestersSeeder::class);
        $this->call(ActivitiesSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(SectionsSeeder::class);
        $this->call(AssessmentsSeeder::class);
        $this->call(TimeslotSeeder::class);
        $this->call(AttendSeeder::class);
        $this->call(RegisteredSeeder::class);
    }
}
