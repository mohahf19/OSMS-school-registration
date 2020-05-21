<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Section;
use App\Course;
use App\Registered;
use App\Assessment;
use App\Grade;

class GradesController extends Controller
{
    //
    public function show($c_id){
        $user = Auth::user();
        $userrole = $user->userRole();

        $registered = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
            $courses = collect(new Course);

        foreach ($registered as $c) {
            $courses->push((Course::all()->where('id', $c->course_id)->first()));
        }
        $averages = array();
        if($courses->contains('id', $c_id)){ 
            //student signed up to requested course
            $assessments = Assessment::where('course_id', $c_id)->get();
            foreach ($assessments as $assessment){
                $id = $assessment->id;
                $temp = Grade::where('assessment_id', $id);
                $avg = $temp->avg('grade');
                $averages[$id] = $avg;
            }
            //$grades has the grades for the student

            $data = DB::table('grades')
                ->join('assessments', 'assessments.id', '=', 'grades.assessment_id')
                ->where('student_id', $user->id)
                ->where('course_id', $c_id)
                ->get();

        }
        $courseinfo = Course::where('id', $c_id)->select('title', 'code')->first();
        
        return view('course-grades', compact('userrole', 'user', 'data', 'courseinfo', 'averages'));
    }
}
