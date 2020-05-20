<?php

namespace App\Http\Controllers;

use App\Instructor;
use App\Student;
use App\TA;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;

class LoginController extends Controller
{
    public function index( Request $request){
        if( Auth::user()){
            return Redirect::to('/home');
        } else {
            return view('auth.login');
        }
    }
    
    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }
    public function login( Request $request)
    {
        switch ($request->login_type){
            case 1: {
                $student = Student::where('user_id', $request->email)->first();
                if( $student && Hash::check($request->password, $student->user->password)){
                    $user = $student->user;
                    Auth::login($user);
                    $user->update(['login_type', 2]);
                    $user->save();
                    return redirect('/home');
                } else {
                    return Redirect::to('/login')->withErrors('invalidLogin');
                }
                break;
            }
            case 2:{
                $ta = TA::where('user_id', $request->email)->first();
                if( $ta && Hash::check($request->password, $ta->user->password)){
                    $user = $ta->user;
                    Auth::login($user);
                    $user->update(['login_type', 2]);
                    $user->save();
                    return redirect('/home');
                } else {
                    return Redirect::to('/login')->withErrors('invalidLogin');
                }
                break;
            }
            case 3:{
                $ins = Instructor::where('user_id', $request->email)->first();
                if( $ins && Hash::check($request->password, $ins->user->password)){
                    $user = $ins->user;
                    Auth::login($user);
                    $user->update(['login_type', 2]);
                    $user->save();
                    return redirect('/home');
                } else {
                    return Redirect::to('/login')->withErrors('invalidLogin');
                }
                break;
            }
            default:{
                return Redirect::to('/login')->withErrors('invalidLogin');
                break;
            }
        }
        
    }
}
