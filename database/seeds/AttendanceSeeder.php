<?php

use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('attendances')->insert([
            'student_id'=> 22001000,
            'course_id' => 1,
            'section_id'=>2,
            'semester_id' => 1,
            'week_no' => 1,
            'attendance_count'=> 2,
            'total_count'=>4,
            'comment' => 'late for presentation'
        ]);

        DB::table('attendances')->insert([
            'student_id'=> 22001000,
            'course_id' => 1,
            'section_id'=>2,
            'semester_id' => 1,
            'week_no' => 2,
            'attendance_count'=> 3,
            'total_count'=>3
        ]);

        DB::table('attendances')->insert([
            'student_id'=> 22001000,
            'course_id' => 5,
            'section_id'=>1,
            'semester_id' => 1,
            'week_no' => 2,
            'attendance_count'=> 3,
            'total_count'=>3
        ]);

        DB::table('attendances')->insert([
            'student_id'=> 22001010,
            'course_id' => 1,
            'section_id'=>2,
            'semester_id' => 1,
            'week_no' => 2,
            'attendance_count'=> 3,
            'total_count'=>3
        ]);

    }
}
