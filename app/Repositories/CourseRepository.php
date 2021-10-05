<?php

namespace App\Repositories;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\CourseLocation;
use App\Helper\Helper;
use App\Models\Location;
use App\Response;

class CourseRepository
{
    public function store($courseRequest)
    {
        $validated = $courseRequest->validated();

        $destinationPath = Response::COURSE_IMAGE_PATH.'/'.$courseRequest->title;
        $path = Helper::saveFile($courseRequest->file('image'), $destinationPath, $courseRequest->title);
        
        $course = Course::create([
            'title' => $courseRequest->title,
            'description' => $courseRequest->description,
            'duration' => $courseRequest->duration,
            'level' => $courseRequest->level,
            'image' => $path,
        ]);


        $courseLocation = CourseLocation::create([
            'course_id' => $course->id,
            'location_id' => $courseRequest->location,
            'price' => $courseRequest->price,
        ]);
        
        return [
            'data' => [
                'course' => $course,
                'courseLocaton' => $courseLocation,
            ]
        ];
    }

    public function create(){
        $locations = Location::all();
        return view('courses.form', compact('locations', $locations));
    }
}
