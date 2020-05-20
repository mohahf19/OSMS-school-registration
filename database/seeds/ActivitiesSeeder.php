<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avtivities')->insert([
            'title' => 'Time Management Conference',
            'points' => '10',
            'location' => 'Zoom',
            'quota' => '275',
            'date' => '27/05/2020',
            'start_time' => '18:30',
            'end_time' => '19:00'
        ]);

        DB::table('avtivities')->insert([
            'title' => 'Concert',
            'points' => '100',
            'location' => 'Zoom',
            'quota' => '50',
            'date' => '28/05/2020',
            'start_time' => '17:30',
            'end_time' => '20:00'
        ]);

        DB::table('avtivities')->insert([
            'title' => 'MATLAB Session',
            'points' => '50',
            'location' => 'Zoom',
            'quota' => '275',
            'date' => '30/05/2020',
            'start_time' => '17:30',
            'end_time' => '20:00'
        ]);
    }
}
