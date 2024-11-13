<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


//PROFILES
    //TEST
    Route::get('/profiles',[ProfileController::class,'showAllPros'])->name('showAllPros');

Route::get('/profile-users',[ProfileController::class,'getAllUsers'])->name('getAllUsers');

//USERS
    //TEST
    Route::get('/users',[UserController::class,'showAllUsers'])->name('users');

Route::get('/user-profile/{id}',[UserController::class,'getProfile'])->name('getProfile');
Route::get('/user-courses/{id}', [UserController::class, 'getCourses'])->name('getCourses');

//COURSES
    //TEST
    Route::get('/courses',[CourseController::class,'showAllCourses'])->name('showAllCourses');

Route::get('/courses/{id}',[CourseController::class,'getCourseUsers'])->name('getCourseUser');