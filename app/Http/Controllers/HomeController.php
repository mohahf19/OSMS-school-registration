<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use App\Registered;
use App\Teaches;
use App\Timeslot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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

        if ($user->login_type == 1) {
            //get courses
            $courses = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
            $todays_courses = collect(new Course);
            $todays_sections = collect(new Section);
            $todays_slots = collect(new Timeslot);

            foreach ($courses as $c) {
                $secs = Section::all()->where('course_id', $c->course_id)
                    ->where('section_code', $c->section_id);

                if (!$secs->isEmpty()) {
                    $t = $secs->first()->timeslot_id;

                    //get available time slots
                    $ts = Timeslot::all()->where('id', $t);

                    //if there is today
                    if (!$ts->isEmpty()) {
                        $todays_sections->push($secs->first());
                        $todays_courses->push((Course::all()->where('id', $c->course_id)->first()));
                        $todays_slots->push($ts->first());
                    }
                }
            }
            $cal = [];
            for ($j = 0; $j <= 23; $j++) {
                for ($i = 1; $i <= 7; $i++) {
                    $input = "";
                    for ($a = 0; $a < count($todays_slots); $a++) {
                        if ($todays_slots[$a]->day == $i && $todays_slots[$a]->time == $j) {
                            $input .= $todays_courses[$a]->code . "(" . $todays_sections[$a]->classroom . ")  ";
                        }
                    }
                    array_push($cal, $input);
                }
            }

            return view('student-home', [
                'userrole' => $userrole, 'user' => $user, 'todays_sections' => $todays_sections,
                'todays_courses' => $todays_courses, 'todays_slots' => $todays_slots, 'calendar' => $cal
            ]);
        } else if ($user->login_type == 2) {
            $courses = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
            $todays_courses = collect(new Course);
            $todays_sections = collect(new Section);
            $todays_slots = collect(new Timeslot);

            foreach ($courses as $c) {
                $secs = Section::all()->where('course_id', $c->course_id)
                    ->where('section_code', $c->section_id);
                if (!$secs->isEmpty()) {
                    $t = $secs->first()->timeslot_id;

                    //get available time slots
                    $ts = Timeslot::all()->where('id', $t);

                    //if there is today
                    if (!$ts->isEmpty()) {
                        $todays_sections->push($secs->first());
                        $todays_courses->push((Course::all()->where('id', $c->course_id)->first()));
                        $todays_slots->push($ts->first());
                    }
                }
            }
            return view('student-home', [
                'userrole' => $userrole, 'user' => $user, 'todays_sections' => $todays_sections,
                'todays_courses' => $todays_courses, 'todays_slots' => $todays_slots
            ]);
        } else {
            $days = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SAT"];
            $teaches = Teaches::where('instructor_id', $userrole->id)->get();
            foreach ($teaches as $t) {
                $s = Section::where('id', $t->section_id)->first();
                $c = Course::where('id', $s->course_id)->first();
                $timeSlot = Timeslot::where('id', $s->timeslot_id)->first();
                $s->day = $days[$timeSlot->day - 1];
                $s->time = $timeSlot->time < 10 ? ("0" . $timeSlot->time . ":40") : ($timeSlot->time . ":40");
                $t->course = $c;
                $t->section = $s;
            }

            $cal = [];
            for ($j = 0; $j <= 23; $j++) {
                for ($i = 1; $i <= 7; $i++) {
                    $input = "";
                    // for ($a = 0; $a < count($todays_slots); $a++) {
                    //     if ($todays_slots[$a]->day == $i && $todays_slots[$a]->time == $j) {
                    //         $input .= $todays_courses[$a]->code . "(" . $todays_sections[$a]->classroom . ")  ";
                    //     }
                    // }
                    array_push($cal, $input);
                }
            }

            return view('instructor-home', [
                'userrole' => $userrole, 'user' => $user, 'teaches' => $teaches, 'calendar' => $cal
            ]);
        }
    }

    public function courses()
    {
        $courses = Course::all();
        $user = Auth::user();
        $userrole = $user->userRole();
        return view('course-registration', ['courses' => $courses, 'userrole' => $userrole, 'user' => $user]);
    }
    public function courseSections($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $sections = Section::where('course_id', $course_id)
            ->where('quota', '>', 0)
            // ->select('sections.id as section_id', 'sections.*')
            // ->join('instructors', 'instructors.id', '=', 'instructor_id')
            // ->join('users', 'users.id', '=', 'instructors.user_id')
            ->get();
        if ($sections && $course) {
            $user = Auth::user();
            $userrole = $user->userRole();
            return view('section-registration', ['sections' => $sections, 'course' => $course, 'userrole' => $userrole, 'user' => $user]);
        }
    }

    public function meals()
    {
        $user = Auth::user();
        return view('meals-page', compact('user'));
    }

    public function dorms()
    {
        $user = Auth::user();
        return view('dormitories-page', compact('user'));
    }

    public function payments()
    {
        $user = Auth::user();
        return view('payments', compact('user'));
    }

    public function CurrCourses()
    {
        $user = Auth::user();
        $userrole = $user->userRole();

        //get courses
        $courses = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
        $todays_courses = collect(new Course);
        $todays_sections = collect(new Section);
        $todays_slots = collect(new Timeslot);

        foreach ($courses as $c) {
            $secs = Section::all()->where('course_id', $c->course_id)
                ->where('section_code', $c->section_id);
            if (!$secs->isEmpty()) {
                $t = $secs->first()->timeslot_id;

                //get available time slots
                $ts = Timeslot::all()->where('id', $t);

                //if there is today
                if (!$ts->isEmpty()) {
                    $todays_sections->push($secs->first());
                    $todays_courses->push((Course::all()->where('id', $c->course_id)->first()));
                    $todays_slots->push($ts->first());
                }
            }
        }
        return view('student-home', [
            'userrole' => $userrole, 'user' => $user, 'todays_sections' => $todays_sections,
            'todays_courses' => $todays_courses, 'todays_slots' => $todays_slots
        ]);
    }

    private function getCurrentCourses()
    {
        $user = Auth::user();
        $registered = Registered::all()->where('st_id', $user->id)->whereNull('letter_grade');
        $courses = collect(new Course);

        foreach ($registered as $c) {
            $courses->push((Course::all()->where('id', $c->course_id)->first()));
        }

        return $courses;
    }

    public function gpacalc()
    {
        $user = Auth::user();
        $student = $user->userRole();

        $courses = $this->getCurrentCourses();


        $newgpa = $student->gpa;

        return view('gpa-calculator', compact('user', 'student', 'courses', 'newgpa'));
    }

    public function gpacalculate()
    {
        $user = Auth::user();
        $student = $user->userRole();

        $newpoints = 0;
        $newcredits = 0;

        $courses = $this->getCurrentCourses();
        $data = request()->all();
        foreach ($courses as $c) {
            $newpoints += ($data[$c->id]) * $c->credits;
            $newcredits += $c->credits;
        }

        $newgpa = ($student->grade_points + $newpoints) / ($student->total_credits + $newcredits);


        return view('gpa-calculator', compact('user', 'student', 'courses', 'newgpa'));
    }

    public function registerSection()
    {
        $user = Auth::user();
        $student = $user->userRole();

        $sec_id = request()->all()['selected'];

        $sec = Section::where('id', $sec_id)->first();

        $course_id = $sec->course_id;
        $sec_code = $sec->section_code;


        DB::table('registered')->insert([
            'st_id' => 22001000,
            'course_id' => $course_id,
            'section_id' => $sec_code,
            'semester' => "Spring",
            'year' => 2000,
        ]);

        return redirect('/home');
    }
}
