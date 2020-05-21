<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessments')->insert([
            'course_id' => '342',
            'type' => 'Midterm',
            'name' => 'Midterm 1',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '10',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '353',
            'type' => 'Midterm',
            'name' => 'Midterm 2',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '20',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '101',
            'type' => 'Final',
            'name' => 'Final',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '25',
            'location'  => 'Zoom'
        ]);

    }
}
