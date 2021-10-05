<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gallery;

class HomeController extends Controller
{
    //
    public function showHome()
    {
        $courses = Course::with('location')->get();
        $galleries = Gallery::all();
        return view('front.pages.home')->with('courses', $courses)->with('galleries', $galleries);
    }

    public function showCourses()
    {
        $courses = Course::with('location')->get();
        return view('front.pages.courses', compact('courses', $courses));
    }

    public function showAbout()
    {
        return view('front.pages.about');
    }

    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('front.pages.course')->with('course', $course);
    }
}
