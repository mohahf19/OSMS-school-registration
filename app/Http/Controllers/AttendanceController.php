<?php

namespace App\Http\Controllers;

use App\Attend;
use App\Attendance;
use App\Course;
use App\Registered;
use App\Section;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function index( $section_id, $semester_id, $student_id){
        $user = Auth::user();
        $userrole = $user->userRole();
        $attendances = Attendance::where('section_id', $section_id)->where('semester_id', $semester_id)->where('student_id', $student_id)->get();

        return view('scheduled-exams', [
            'userrole' => $userrole, 'user' => $user, 'attendance' => $attendances
        ]);
    }

    public function addAttendance( $section_id){
        $user = Auth::user();
        $userrole = $user->userRole();

        $s = Section::where('id', $section_id)->first();
        $c = Course::where('id', $s->course_id)->first();
        $r = Registered::where('section_id', $s->section_code)->where('course_id', $c->id)->get();
        $students = [];
        foreach( $r as $rtemp){
            $user = User::where('id', $rtemp->st_id)->first();
            array_push( $students, $user);
        }
        $s->course = $c;


        return view('add-attendance', [
            'userrole' => $userrole, 'user' => $user, 'students' => $students, 'section' => $s
        ]);
    }

    public function show( $c_id){
        $user = Auth::user();
        $userrole = $user->userRole();

        $registered = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
        $courses = collect(new Course);

        foreach ($registered as $c) {
            $courses->push((Course::all()->where('id', $c->course_id)->first()));
        }
    
        $data = DB::table('attendances')
            ->where('course_id', $c_id)
            ->where('student_id', $user->id)
            ->select('week_no', 'attendance_count', 'total_count', 'comment')
            ->orderBy('week_no', 'ASC')
            ->get();
        $courseinfo = Course::where('id', $c_id)->select('title', 'code')->first();
        
        return view('course-attendance', compact('userrole', 'user','data', 'courseinfo'));

    }
}
