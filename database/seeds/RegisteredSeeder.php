<?php

use Illuminate\Database\Seeder;

class RegisteredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('registereds')->insert([
            'st_id' => 22001000,
            'course_id' => 1,
            'section_id' => 2,
            'semester' => "Spring",
            'year' => 2020,
            'letter_grade' => NULL ]);

        DB::table('registereds')->insert([
            'st_id' => 22001000,
            'course_id' => 7,
            'section_id' => 1,
            'semester' => "Spring",
            'year' => 2017,
            'letter_grade' => 'A+' ]);
    }
}
