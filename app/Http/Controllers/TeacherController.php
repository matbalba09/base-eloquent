<?php

namespace App\Http\Controllers;

use App\Response;
use App\Models\User;
use App\Helper\Helper;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TeacherRequest;
use App\Repositories\TeacherRepository;

class TeacherController extends Controller
{
    //

    public function create(TeacherRequest $teacherRequest ,TeacherRepository $teacherRepository)
    {
        $response = $teacherRepository->create($teacherRequest);
    
        return $response;
    }

    public function show(TeacherRepository $teacherRepository){
        $response = $teacherRepository->show();
    
        return $response;    
    }

    // public function testingGetuser(){
    //     $role = 'Teacher';
    //     if($role == 'Teacher'){
    //         $user = User::where('id', Auth::user()->id)->with('teacherInfo')->first();
    //     }else{
    //         $user = User::where('id', Auth::user()->id)->with('teacherInfo')->first();
    //     }
    //     dd($user);
    // }

    public function store(TeacherRequest $teacherRequest ,TeacherRepository $teacherRepository)
    {
        $response = $teacherRepository->store($teacherRequest);
        
        return $response;
    }

    public function edit(Teacher $teacher)
    {
        //
    }

    public function update(TeacherRequest $teacherRequest){
        
    }

    public function destroy(Teacher $teacher)
    {
        //
    }
}