<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Course;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $s->course = $c;


        return view('add-attendance', [
            'userrole' => $userrole, 'user' => $user
        ]);
    }

    public function viewAttendance( $section_id){
        $user = Auth::user();
        $userrole = $user->userRole();
        $attendances = Attendance::where('section_id', $section_id)->where('student_id', $user->id)->get();



        return view('course-attendance', [
            'userrole' => $userrole, 'user' => $user, 'attendances' => $attendances
        ]);
    }
}
