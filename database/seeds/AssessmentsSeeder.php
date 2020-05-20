<?php

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
            'course_id' => '1',
            'type' => 'Midterm',
            'name' => 'Midterm 1',
            'date' => '03/04/2020',
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '10',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '5',
            'type' => 'Midterm',
            'name' => 'Midterm 2',
            'date' => '05/05/2020',
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '20',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '3',
            'type' => 'Final',
            'name' => 'Final',
            'date' => '01/06/2020',
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '25',
            'location'  => 'Zoom'
        ]);

    }
}
