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
                $min = rand(0, 59);
                if( $min < 10){
                    $min = ":0".strval($min);
                } else {
                    $min = ":".strval($min);
                }
                DB::table('timeslots')->insert([
                    'day' => $i,
                    'start_time' => strval($j).$min,
                    'end_time' =>  strval(($j + 1) % 24).$min,
                ]);
            }
        }
    }
}
