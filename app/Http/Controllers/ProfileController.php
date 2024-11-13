<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{   

        //TEST
        public function showAllPros(){
            $profiles = Profile::all();
            return view('profiles', ['profiles'=>$profiles]);

        }

    public function getAllUsers(){
        $profiles = User::has('profile')->with('profile')->get();
        return view('profile-users', compact('profiles'));

    }
}
