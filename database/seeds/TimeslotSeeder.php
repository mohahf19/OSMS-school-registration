<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i = 1; $i <= 7; $i++){
            for( $j = 0; $j < 24; $j++){
                
                DB::table('timeslots')->insert([
                    'day' => $i,
                    'time' => $j,
                ]);
            }
        }
    }
}
