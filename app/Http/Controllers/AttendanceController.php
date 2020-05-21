<?php

namespace App\Http\Controllers;

use App\Attendance;
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
}
