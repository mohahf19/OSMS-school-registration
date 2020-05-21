<?php

namespace App\Http\Controllers;

use App\TA;
use App\User;
use App\Tutors;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorListController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userrole = $user->userRole();

        $tutors = Tutors::all();
        foreach( $tutors as $t){
            $ta = TA::where('id', $t->ta_id)->first();
            $u = User::where('id', $ta->user_id)->first();
            $t->user = $u;

            $c = Course::where('id', $t->course_id)->first();
            $t->course = $c;
        }
        return view('instructor-ta-list', [
            'userrole' => $userrole, 'user' => $user, 'tutor' => $tutors
        ]);
    }
}

// $tas = TA::all();
//         $tutor = tutors::all();
//         foreach( $tas as $t){
//             $u = User::where('id', $t->user_id)->first();
//             $t->user = $u;
//             foreach( $tutor as $tutor){
//                 $tut = Tutors::where('ta_id', $t->id)->first();
//                 $c = Course::where('id', $tut->course_id)->first();
//                 $t->course = $c;
//             }
//         }
        
        