<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function showCourses(Request $request){
        $courses = Course::all();
        return view('studentdashboard', ['courses' => $courses]);
    }
}
