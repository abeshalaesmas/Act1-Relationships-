<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//USERS
Route::get('/users',[UserController::class,'showAllUsers'])->name('users');
Route::get('/user-profile/{id}',[UserController::class,'getProfile'])->name('profile');


//PROFILES
Route::get('/profiles',[ProfileController::class,'showAllPros'])->name('profiles');



//COURSES
Route::get('/courses',[CourseController::class,'showAllCourses'])->name('courses');