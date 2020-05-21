<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use App\Registered;
use App\Timeslot;
use App\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userrole = $user->userRole();

        $assessments = Assessment::all();
        foreach( $assessments as $a){
            $course = Course::where('id', $a->course_id)->first();
            $a->course = $course;
        }

        return view('scheduled-exams', [
            'userrole' => $userrole, 'user' => $user, 'assessments' => $assessments
        ]);
    }
}
