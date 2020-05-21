<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teaches')->insert([
            'section_id' => 3,
            'instructor_id' => 1
        ]);
        DB::table('teaches')->insert([
            'section_id' => 1,
            'instructor_id' => 1
        ]);
        DB::table('teaches')->insert([
            'section_id' => 2,
            'instructor_id' => 1
        ]);
        DB::table('teaches')->insert([
            'section_id' => 4,
            'instructor_id' => 2
        ]);
        DB::table('teaches')->insert([
            'section_id' => 5,
            'instructor_id' => 2
        ]);
        DB::table('teaches')->insert([
            'section_id' => 6,
            'instructor_id' => 2
        ]);
        DB::table('teaches')->insert([
            'section_id' => 7,
            'instructor_id' => 2
        ]);
    }
}
