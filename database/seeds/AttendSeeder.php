<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attends')->insert([
            'st_id' => 22001000,
            'course_id' => 1,
            'section_id' => 2,
            'semester' => "Spring",
            'year' => 2018,
            'date' => Carbon::parse('2020-01-01'),
            'hours' => 1,
            'tot_hours' => 3]);
    }
}
