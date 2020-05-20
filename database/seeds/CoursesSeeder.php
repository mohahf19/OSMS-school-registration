<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Basics of Signals and Systems',
            'code' => 'EEE391',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Database Systems',
            'code' => 'CS353',
            'credits' => 3,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Operating Systems',
            'code' => 'CS342',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Graphic Design for Non-majors',
            'code' => 'GRA209',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Political Sciences',
            'code' => 'POLS101',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Illustration I',
            'code' => 'GRA421',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
        DB::table('courses')->insert([
            'semester_id' => 1,
            'title' => 'Algorithms',
            'code' => 'CS201',
            'credits' => 4,
            'syllabus' => 'http://www.google.com'
        ]);
    }
}
