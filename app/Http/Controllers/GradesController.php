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
use App\User;

class GradesController extends Controller
{
    public function addGradesIndex( $section_id){
        $user = Auth::user();
        $userrole = $user->userRole();

        $s = Section::where( 'id', $section_id)->first();
        $c = Course::where('id', $s->course_id)->first();
        $assessments = Assessment::where('course_id', $s->course_id)->get();
        foreach( $assessments as $a){
            $course = Course::where('id', $a->course_id)->first();
            $a->course = $course;
        }

        return view('assessments-grade', ['userrole' => $userrole, 'user' => $user, 'section' => $s, 'course' => $c, 'assessments' => $assessments]);
    }
    public function addGradesCourse( $section_id, $assessment_id){
        
        $user = Auth::user();
        $userrole = $user->userRole();

        $assessment = Assessment::where('id', $assessment_id)->first();
        $s = Section::where('id', $section_id)->first();
        $c = Course::where('id', $s->course_id)->first();
        $r = Registered::where('section_id', $s->section_code)->where('course_id', $c->id)->get();
        $students = [];
        foreach( $r as $rtemp){
            $user = User::where('id', $rtemp->st_id)->first();
            array_push( $students, $user);
        }
        $s->course = $c;
        return view('add-grades',[
            'userrole' => $userrole, 'user' => $user, 'students' => $students, 'section' => $s, 'assessment' => $assessment
        ]);
    }
    public function addGradesSubmit( Request $request){
        $assessment = Assessment::where('id', $request->ass)->first();
        $grade = Grade::create([
            'student_id' => $request->student,
            'assessment_id' => $request->ass,
            'grade' => $request->obtained,
            'comment' => $request->comment,
        ]);
        return redirect('add-grades-course/' . $request->sec . '/' . $request->ass);
    }

    public function show($c_id){
        $user = Auth::user();
        $userrole = $user->userRole();

        $registered = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
            $courses = collect(new Course);

        foreach ($registered as $c) {
            $courses->push((Course::all()->where('id', $c->course_id)->first()));
        }
        $averages = array();
        $mins = array();
        $maxs = array();
        if($courses->contains('id', $c_id)){ 
            //student signed up to requested course
            $assessments = Assessment::where('course_id', $c_id)->get();
            foreach ($assessments as $assessment){
                $id = $assessment->id;
                $temp = Grade::where('assessment_id', $id);
                $avg = $temp->avg('grade');
                $mins[$id] = $temp->min('grade');
                $maxs[$id] = $temp->max('grade');
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
        
        return view('course-grades', compact('userrole', 'user', 'data', 'courseinfo', 'averages', 'mins', 'maxs'));
    }
}
