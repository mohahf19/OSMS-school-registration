<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $userrole = $user->userRole();
        return view('home', ['userrole' => $userrole, 'user' => $user]);
    }

    public function courses()
    {
        $courses = Course::all();
        $user = Auth::user();
        $userrole = $user->userRole();
        return view('course-registration', ['courses' => $courses, 'userrole' => $userrole, 'user' => $user]);

    }
    public function courseSections( $course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $sections = Section::where('course_id', $course_id)->get();
        if( $sections && $course){
            $user = Auth::user();
            $userrole = $user->userRole();
            return view('section-registration', ['sections' => $sections, 'course' => $course, 'userrole' => $userrole, 'user' => $user]);
        }
    }
    
    public function meals(){
        $user = Auth::user();
        return view ('meals-page', compact('user'));
    }
}
