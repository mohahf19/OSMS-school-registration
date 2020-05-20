<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'course_id' => 1,
            'classroom' => 'B-Z05',
            'quota' => 60,
            'timeslot_id' => 1,
            'section_code' => 1,
            'instructor_id' => 1

        ]);
        DB::table('sections')->insert([
            'course_id' => 1,
            'classroom' => 'B-Z02',
            'quota' => 60,
            'timeslot_id' => 2,
            'section_code' => 2,
            'instructor_id' => 1
            

        ]);
        DB::table('sections')->insert([
            'course_id' => 1,
            'classroom' => 'B-Z01',
            'quota' => 60,
            'timeslot_id' => 3,
            'section_code' => 3,
            'instructor_id' => 1

        ]);


        DB::table('sections')->insert([
            'course_id' => 2,
            'classroom' => 'FA-209',
            'quota' => 60,
            'timeslot_id' => 4,
            'section_code' => 1,
            'instructor_id' => 1

        ]);
        DB::table('sections')->insert([
            'course_id' => 2,
            'classroom' => 'FA-202',
            'quota' => 60,
            'timeslot_id' => 9,
            'section_code' => 2,
            'instructor_id' => 1
        ]);
    }
}
