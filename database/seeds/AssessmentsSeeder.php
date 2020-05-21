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

        /**
         * for types, please use:
         * exam, homework, primary, quiz, project
         */
        DB::table('assessments')->insert([
            'course_id' => '1',
            'type' => 'exam',
            'name' => 'Midterm 1',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '10',
            'location'  => 'Zoom'
        ]);

        

        DB::table('assessments')->insert([
            'course_id' => '5',
            'type' => 'exam',
            'name' => 'Midterm 2',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '20',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '3',
            'type' => 'project',
            'name' => 'Project 1',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '25',
            'location'  => 'Zoom'
        ]);

        DB::table('assessments')->insert([
            'course_id' => '1',
            'type' => 'homework',
            'name' => 'Homework 1',
            'date' => Carbon::parse('2020-01-01'),
            'start_time' => '17:30',
            'end_time' => '19:30',
            'max_grade' => '100',
            'percentage' => '5',
            'location'  => 'Submittion Via Moodle'
        ]);

    }
}
