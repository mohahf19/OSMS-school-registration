<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\User;

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
        $user1 = User::where('email', 'student@test.com')->first();
        $user4 = User::where('email', 'student1@test.com')->first();
        //dd($user1);
        DB::table('registered')->insert([
            'st_id' => $user1->id,
            'course_id' => 1,
            'section_id' => 2,
            'semester' => "Spring",
            'year' => 2020,
            'letter_grade' => NULL
        ]);

        DB::table('registered')->insert([
            'st_id' => $user1->id,
            'course_id' => 7,
            'section_id' => 1,
            'semester' => "Spring",
            'year' => 2017,
            'letter_grade' => 'A+'
        ]);

        DB::table('registered')->insert([
            'st_id' => $user1->id,
            'course_id' => 5,
            'section_id' => 1,
            'semester' => "Spring",
            'year' => 2020,
            'letter_grade' => NULL
        ]);
        DB::table('registered')->insert([
            'st_id' => $user4->id,
            'course_id' => 1,
            'section_id' => 2,
            'semester' => "Spring",
            'year' => 2020,
            'letter_grade' => NULL
        ]);


        DB::table('registered')->insert([
            'st_id' => $user4->id,
            'course_id' => 5,
            'section_id' => 3,
            'semester' => "Spring",
            'year' => 2020,
            'letter_grade' => NULL
        ]);
    }
}
