<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showAllPros(){
        $users = User::all();
        $profiles = Profile::all();
        return view('profiles',['profiles'=>$profiles]);

    }
}
