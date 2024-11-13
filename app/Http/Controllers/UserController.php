<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers(){
        $users = User::all();
        return view('users',['users'=>$users]);
    }

    public function getProfile(Request $request){
        // $profile = User::find($request->id)->profile();
        $user = User::with('profile')->find($request->id);
        return view('user-profile', compact('user'));
    }

    public function getCourses(Request $request){
        $user = User::with('courses')->find($request->id);
        $user->courses()->sync([1,2,3,4,5,6,7,8,9,10]);

        return view('user-courses',compact('user'));
    }
}
