<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'student_id'=> 22001000,
            'assessment_id' => 1, 
            'grade' => 69.69,
            'comment' => 'rip'
        ]);

        DB::table('grades')->insert([
            'student_id'=> 22001003,
            'assessment_id' => 1, 
            'grade' => 0,
            'comment' => 'bigger rip'
        ]);

        DB::table('grades')->insert([
            'student_id'=> 22001000,
            'assessment_id' => 2, 
            'grade' => 100,
        ]);

        DB::table('grades')->insert([
            'student_id'=> 22001000,
            'assessment_id' => 4, 
            'grade' => 88,
            'comment'=> 'dont submit late br0'
        ]);
    }
}
