<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $userrole = $user->userRole();

        return view('profile', [
            'userrole' => $userrole, 'user' => $user
        ]);
    }

    public function profileUpdate( Request $request){
        $user = Auth::user();
        $userrole = $user->userRole();

        if( !strcmp($request->password, "***"))
            $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect('/profile');
    }
}
