<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index( Request$request){
        if( Auth::user()){
            return Redirect::to('/home');
        } else {
            return view('auth.login');
        }
    }
    public function login( Request $request)
    {
        switch ($request->login_type){
            case 1:
                $student = Student::where('user_id', $request->id)->first();
                if( $student && $student->user()->password == md5($request->password)){
                    Auth::login($student->user);
                    return Redirect::to('/home');
                }
                break;
            case 2:
            break;
            case 3:
            break;
            default:
                return Redirect::to('/login')->with('errors', ["Invalid login credentials"]);
                break;
        }
        
    }
}
