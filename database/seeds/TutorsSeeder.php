<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutors')->insert([
            'course_id' => 1,
            'ta_id' => 1
        ]);
        DB::table('tutors')->insert([
            'course_id' => 2,
            'ta_id' => 1
        ]);
        DB::table('tutors')->insert([
            'course_id' => 3,
            'ta_id' => 1
        ]);
        DB::table('tutors')->insert([
            'course_id' => 4,
            'ta_id' => 2
        ]);
        DB::table('tutors')->insert([
            'course_id' => 5,
            'ta_id' => 2
        ]);
        DB::table('tutors')->insert([
            'course_id' => 6,
            'ta_id' => 2
        ]);
        DB::table('tutors')->insert([
            'course_id' => 7,
            'ta_id' => 2
        ]);
    }
}
