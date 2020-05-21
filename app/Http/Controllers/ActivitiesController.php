<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Section;
use App\Registered;
use App\Timeslot;
use App\Activity;
use Illuminate\Support\Facades\Auth;

class ActivitiesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userrole = $user->userRole();

        $activities = Activity::all();

        return view('activity-calendar', [
            'userrole' => $userrole, 'user' => $user, 'activities' => $activities
        ]);
    }
}
