<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'title' => "Spring'20",
        ]);
        
        DB::table('semesters')->insert([
            'title' => "Fall'20",
        ]);
    }
}
