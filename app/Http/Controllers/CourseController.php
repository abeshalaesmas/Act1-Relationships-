<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
        //TEST
        public function showAllCourses(){
            $courses = Course::all();
            return view('courses',['courses'=>$courses]);
        }

    public function getCourseUsers(Request $request)
    {
        $course = Course::with('users')->find($request->id);
        $course->users()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        return view('course-users', compact('course'));
    }
}
