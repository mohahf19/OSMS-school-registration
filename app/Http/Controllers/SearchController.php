<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search( Request $request){

        $user = Auth::user();
        $userrole = $user->userRole();

        $users = User::where('name', 'like', '%' . $request->val . '%')->orWhere('surname', 'like', '%' . $request->val . '%')->get();

        return view('search-results', [
            'userrole' => $userrole, 'user' => $user, 'searches' => $users
        ]);
    }
}
