<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Repositories\CourseRepository;

class CourseController extends Controller
{
    public function index(){

    }
    
    public function create(CourseRepository $courseRepository)
    {
        $response = $courseRepository->create();
    
        return $response;
    }
    public function store(CourseRequest $courseRequest, CourseRepository $courseRepository)
    {
        $response = $courseRepository->store($courseRequest);
        
        return $response;
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
