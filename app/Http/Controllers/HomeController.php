<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use App\Registered;
use App\Timeslot;
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

        //get courses
       $courses = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
       $todays_courses = collect(new Course);
       $todays_sections = collect(new Section);
        $todays_slots = collect(new Timeslot);

       foreach ($courses as $c){
           $secs = Section::all()->where('course_id', $c->course_id)
                                    ->where('section_code', $c->section_id);
            if (! $secs->isEmpty()){
                $t = $secs->first()->timeslot_id;
                
                //get available time slots
                $ts = Timeslot::all()->where('id', $t)->where('day', idate('w'));

                //if there is today
                if (! $ts ->isEmpty()){
                    $todays_sections->push($secs->first());
                    $todays_courses->push((Course::all()->where('id', $c->course_id)->first()));
                    $todays_slots->push($ts->first());
                }
            }
            
       }
        return view('home', ['userrole' => $userrole, 'user' => $user, 'todays_sections'=>$todays_sections,
                    'todays_courses'=>$todays_courses, 'todays_slots'=>$todays_slots]);
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

    public function dorms(){
        $user = Auth::user();
        return view ('dormitories-page', compact('user'));
    }

    public function payments(){
        $user = Auth::user();
        return view ('payments', compact('user'));
    }
}
