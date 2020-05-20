<?php

use Carbon\Carbon;
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
        DB::table('activities')->insert([
            'title' => 'Time Management Conference',
            'points' => '10',
            'location' => 'Zoom',
            'quota' => '275',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '18:30',
            'end_time' => '19:00'
        ]);

        DB::table('activities')->insert([
            'title' => 'Concert',
            'points' => '100',
            'location' => 'Zoom',
            'quota' => '50',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '20:00'
        ]);

        DB::table('activities')->insert([
            'title' => 'MATLAB Session',
            'points' => '50',
            'location' => 'Zoom',
            'quota' => '275',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '20:00'
        ]);
    }
}
