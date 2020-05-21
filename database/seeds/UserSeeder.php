<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Barnie',
            'surname' => 'Stinson',
            'email' => 'student@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Robin',
            'surname' => 'Scherbatsky',
            'email' => 'ta@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teddy',
            'surname' => 'Westside',
            'email' => 'instructor@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Daenerys',
            'surname' => 'Targaryen',
            'email' => 'student1@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jon',
            'surname' => 'Snow',
            'email' => 'ta1@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Khal',
            'surname' => 'Drogo',
            'email' => 'instructor1@test.com',
            'address' => 'Dorm 77, Bilkent University',
            'phone' => '+90 552 4299700',
            'birthday' => Carbon::parse('1999-01-01'),
            'password' => bcrypt('testtest'),
        ]);

        $user1 = User::where('email', 'student@test.com')->first();
        $user2 = User::where('email', 'ta@test.com')->first();
        $user3 = User::where('email', 'instructor@test.com')->first();
        $user4 = User::where('email', 'student1@test.com')->first();
        $user5 = User::where('email', 'ta1@test.com')->first();
        $user6 = User::where('email', 'instructor1@test.com')->first();
        
        DB::table('students')->insert([
            'user_id' => $user1->id,
            'grade_points' => 130.8,
            'total_credits' => 40,
        ]);
        DB::table('tas')->insert([
            'user_id' => $user2->id,
            'title' => 'Senior TA'
        ]);
        DB::table('instructors')->insert([
            'user_id' => $user3->id,
            'title' => 'Assistant Professor'
        ]);
        DB::table('students')->insert([
            'user_id' => $user4->id,
            'grade_points' => 145.1,
            'total_credits' => 40,
        ]);
        DB::table('tas')->insert([
            'user_id' => $user5->id,
            'title' => 'TA'
        ]);
        DB::table('instructors')->insert([
            'user_id' => $user6->id,
            'title' => 'Assistant Professor'
        ]);
    }
}
